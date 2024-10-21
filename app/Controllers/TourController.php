<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TourModel;
use CodeIgniter\API\ResponseTrait; // Add this line
use App\Models\ImageModel;
class TourController extends BaseController
{
    use ResponseTrait;
//     public function index(): string
//     {
//         return view('Home/offers');
//     }
//     // Method to load tours via AJAX
//     public function load_tours()
// {
//     $tourModel = new \App\Models\TourModel();
//     $imageModel = new \App\Models\ImageModel();
//     $reviewModel = new \App\Models\ReviewModel();

//     $tours = $tourModel->findAll(); // Lấy danh sách tour từ database

//     if (!empty($tours)) {
//         foreach ($tours as &$tour) {
//             // Lấy hình ảnh liên quan đến tour
//             $image = $imageModel->where('tour_id', $tour['id'])->first();
//             $tour['image_url'] = $image ? base_url($image['image_url']) : '';

//             // Lấy đánh giá cho tour
//             $reviews = $reviewModel->where('tour_id', $tour['id'])->findAll();
//             if (!empty($reviews)) {
//                 $tour['rating'] = array_sum(array_column($reviews, 'rating')) / count($reviews);
//                 $tour['review_count'] = count($reviews);
//                 $tour['review_title'] = 'Very good'; // Có thể tùy chỉnh theo yêu cầu
//             } else {
//                 $tour['rating'] = 0; // Nếu không có đánh giá
//                 $tour['review_count'] = 0; // Nếu không có đánh giá
//                 $tour['review_title'] = 'No reviews yet'; // Thay đổi tiêu đề đánh giá nếu không có đánh giá
//             }
//         }

//         // Trả về danh sách tour dưới dạng JSON
//         return $this->respond([
//             'status' => 'success',
//             'tours' => $tours
//         ]);
//     } else {
//         return $this->respond(['status' => 'error']);
//     }
// }
//     public function detail($id)
//     {
//         $tourModel = new \App\Models\TourModel();
//         $imageModel = new \App\Models\ImageModel();
//         $reviewModel = new \App\Models\ReviewModel();
    
//         // Lấy thông tin tour dựa trên ID
//         $tour = $tourModel->find($id);
//         if ($tour) {
//             // Lấy hình ảnh liên quan đến tour
//             $image = $imageModel->where('tour_id', $tour['id'])->first();
//             $tour['image_url'] = $image ? base_url($image['image_url']) : '';
    
//             // Lấy đánh giá cho tour
//             $reviews = $reviewModel->where('tour_id', $tour['id'])->findAll();
//             if (!empty($reviews)) {
//                 $tour['rating'] = array_sum(array_column($reviews, 'rating')) / count($reviews);
//                 $tour['review_count'] = count($reviews);
//                 $tour['review_title'] = 'Very good'; // Có thể tùy chỉnh theo yêu cầu
//             } else {
//                 $tour['rating'] = 0;
//                 $tour['review_count'] = 0;
//                 $tour['review_title'] = 'No reviews yet';
//             }
    
//             return view('tour/single_listing', ['tour' => $tour]);
//         } else {
//             return redirect()->to('tour'); // Chuyển hướng nếu không tìm thấy tour
//         }
//     }
    



    
}
