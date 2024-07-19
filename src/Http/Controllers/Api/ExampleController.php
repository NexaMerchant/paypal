<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-07-19 15:33:07
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Paypal\Http\Controllers\Api;

use Illuminate\Foundation\Validation\ValidatesRequests;

class ExampleController extends Controller
{
    public function demo() {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "success";
        return response()->json($data);
    }
}
