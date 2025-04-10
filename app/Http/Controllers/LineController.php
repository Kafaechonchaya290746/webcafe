<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LineController extends Controller
{
    // ส่งผู้ใช้ไปที่ LINE Login
    public function redirectToLine()
    {
        return Socialite::driver('line')->redirect();
    }

    // Callback เมื่อผู้ใช้ล็อกอินสำเร็จ
    public function handleLineCallback()
    {
        try {
            $lineUser = Socialite::driver('line')->user();

            // ตรวจสอบว่าผู้ใช้เคยลงทะเบียนหรือไม่
            $user = User::where('line_id', $lineUser->getId())->first();

            if (!$user) {
                // ถ้าไม่มี ให้สร้างบัญชีใหม่
                $user = User::create([
                    'name' => $lineUser->getName(),
                    'email' => $lineUser->getEmail() ?? $lineUser->getId() . '@line.me',
                    'line_id' => $lineUser->getId(),
                    'profile_photo_path' => $lineUser->getAvatar(),
                ]);
            } else {
                // ถ้ามีอยู่แล้ว ให้อัปเดตรูปโปรไฟล์ล่าสุดจาก LINE
                $user->update([
                    'profile_photo_path' => $lineUser->getAvatar(),
                ]);
            }

            // ล็อกอินผู้ใช้
            Auth::login($user);

            // ไปที่หน้า Dashboard
            return redirect()->away('https://www.figma.com/proto/NrMf1U2C8Yv2ZIZugs2vvg/Untitled?node-id=17-615&t=7RJ5DEiiuKIigBZv-1&scaling=scale-down&content-scaling=fixed&page-id=8%3A308&starting-point-node-id=17%3A191');

        } catch (\Exception $e) {
            return redirect('/')->with('error', 'ไม่สามารถเข้าสู่ระบบได้');
        }
    }
}
