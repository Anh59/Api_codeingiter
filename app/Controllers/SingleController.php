<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TourModel;
use App\Models\ImageModel;
use App\Models\ReviewModel;
use App\Models\RoomModel;
class SingleController extends BaseController
{
    public function index(): string
{
    $tourModel = new \App\Models\TourModel();
    $imageModel = new \App\Models\ImageModel();
    $reviewModel = new \App\Models\ReviewModel();

    // Lấy danh sách tour từ database
    $tours = $tourModel->findAll();

    if (!empty($tours)) {
        foreach ($tours as &$tour) {
            // Lấy hình ảnh liên quan đến tour
            $image = $imageModel->where('tour_id', $tour['id'])->first();
            $tour['image_url'] = $image ? base_url($image['image_url']) : '';

            // Lấy đánh giá cho tour
            $reviews = $reviewModel->where('tour_id', $tour['id'])->findAll();
            if (!empty($reviews)) {
                $tour['rating'] = array_sum(array_column($reviews, 'rating')) / count($reviews);
                $tour['review_count'] = count($reviews);
                $tour['review_title'] = 'Very good'; // Có thể tùy chỉnh theo yêu cầu
            } else {
                $tour['rating'] = 0; // Nếu không có đánh giá
                $tour['review_count'] = 0; // Nếu không có đánh giá
                $tour['review_title'] = 'No reviews yet'; // Thay đổi tiêu đề đánh giá nếu không có đánh giá
            }
        }
    }

    // Truyền dữ liệu tours đến view
    return view('Home/tour-offers', ['tours' => $tours]);
}

    // Trang chi tiết từng tour
public function single_listing($id): string
{
    $tourModel = new \App\Models\TourModel();
    $imageModel = new \App\Models\ImageModel();
    $reviewModel = new \App\Models\ReviewModel();
    $roomModel = new \App\Models\RoomModel(); // Model để lấy thông tin phòng
    $customerModel = new \App\Models\CustomerModel(); // Model để lấy thông tin khách hàng

    // Lấy thông tin tour theo ID
    $tour = $tourModel->find($id);

    if ($tour) {
        // Lấy tất cả hình ảnh liên quan đến tour
        $images = $imageModel->where('tour_id', $tour['id'])->findAll();
        if (!empty($images)) {
            $tour['image_url'] = base_url($images[0]['image_url']);
            $tour['gallery_images'] = array_slice($images, 1);
        } else {
            $tour['image_url'] = ''; // Có thể thêm ảnh mặc định nếu cần
            $tour['gallery_images'] = [];
        }

        // Lấy đánh giá cho tour
        $reviews = $reviewModel->where('tour_id', $tour['id'])->findAll();
        if (!empty($reviews)) {
            $tour['rating'] = array_sum(array_column($reviews, 'rating')) / count($reviews);
            $tour['review_count'] = count($reviews);
            $tour['review_title'] = 'Very good';

            // Lấy thêm thông tin khách hàng từ bảng `customers`
            foreach ($reviews as &$review) {
                $customer = $customerModel->find($review['customer_id']);
                if ($customer) {
                    $review['reviewer_name'] = $customer['name']; // Gán tên khách hàng
                    $review['reviewer_image'] = $customer['image_url']; // Gán hình ảnh khách hàng từ cột image_url
                } else {
                    $review['reviewer_name'] = 'Unknown'; // Nếu không tìm thấy khách hàng
                    $review['reviewer_image'] = ''; // Hình ảnh mặc định nếu không có
                }
            }
        } else {
            $tour['rating'] = 0;
            $tour['review_count'] = 0;
            $tour['review_title'] = 'No reviews yet';
        }

        // Lấy thông tin phòng cho tour
        $rooms = $roomModel->where('tour_id', $tour['id'])->findAll();
        $tour['rooms'] = $rooms; // Truyền dữ liệu phòng vào tour
    }

    // Truyền dữ liệu tour vào view chi tiết
    return view('Home/single_listing', [
        'tour' => $tour,
        'reviews' => $reviews // Truyền $reviews vào view
    ]);
}


    


    
}   
