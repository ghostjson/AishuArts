<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|string name
 * @property int|mixed value
 */
class WebsiteStatistics extends Model
{
    use HasFactory;

    /**
     * @return mixed
     */
    public static function getCurrentMonthTraffic()
    {
        return WebsiteStatistics::where('name', 'traffic_current_month')->first()->value;
    }

    public static function addTraffic()
    {
        $traffic = WebsiteStatistics::where('name', 'traffic_current_month')->first();
        $traffic->value = $traffic->value+1;
        $traffic->save();
    }

    public static function trafficChange()
    {
        $traffic_cur = WebsiteStatistics::where('name', 'traffic_current_month')->first()->value;
        $traffic_prev = WebsiteStatistics::where('name', 'traffic_previous_month')->first()->value;

        return $traffic_prev ? (($traffic_cur/$traffic_prev) - 1) * 100 : 100;
    }

    public static function getCurrentMonthNewUsers()
    {
        return User::whereMonth('created_at', Carbon::now()->month)->get()->count();
    }

    public static function usersChange()
    {
        $current_month = User::whereMonth('created_at', Carbon::now()->month)->get()->count();
        $prev_month = User::whereMonth('created_at', Carbon::now()->subMonth()->month)->get()->count();

        return $prev_month ? (($current_month/$prev_month) - 1) * 100 : 100;
    }

    public static function getCurrentMonthSales()
    {
        return Order::whereMonth('created_at', Carbon::now()->month)
            ->get()->count();
    }

    public static function salesChange()
    {
        $current_month = Order::whereMonth('created_at', Carbon::now()->month)->get()->count();
        $prev_month = Order::whereMonth('created_at', Carbon::now()->subMonth()->month)->get()->count();

        return $prev_month ? (($current_month/$prev_month) - 1) * 100 : 100;
    }

    public static function getCurrentMonthFeedbacks()
    {
        return Review::whereMonth('created_at', Carbon::now()->month)
            ->where('shiprocket_status', 'Completed')
            ->get()->count();
    }

    public static function feedbackChange()
    {
        $current_month = Review::whereMonth('created_at', Carbon::now()->month)->get()->count();
        $prev_month = Review::whereMonth('created_at', Carbon::now()->subMonth()->month)->get()->count();

        return $prev_month ? (($current_month/$prev_month) - 1) * 100 : 100;
    }
}
