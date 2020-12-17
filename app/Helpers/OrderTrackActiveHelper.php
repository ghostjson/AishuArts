<?php

if (!function_exists('orderTrackActive')) {

    /**
     * description
     *
     * @param string $status
     * @param string $comp
     * @return string
     */
    function orderTrackActive(string $status, string $comp) : string
    {
        if($status === 'Pending'){
            if($comp === 'Confirmed'){
                return 'active';
            }
        }else if($status === 'Confirmed'){
            if($comp === 'Confirmed' || $comp === 'PickedUp'){
                return 'active';
            }
        }else if($status === 'Shipped'){
            if($comp === 'Confirmed' || $comp === 'PickedUp' || $comp === 'OnTheWay'){
                return 'active';
            }
        }else if($status === 'Delivered'){
            if($comp === 'Confirmed' || $comp === 'PickedUp' || $comp === 'OnTheWay' || $comp === 'Delivered'){
                return 'active';
            }
        }

        return '';
    }
}
