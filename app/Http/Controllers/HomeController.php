<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Banner;
use App\BannerType;
use App\Section;
use App\CompanyInfo;


class HomeController extends Controller
{
    public function index(){

        $homeBanners = Banner::where('banner_type_id',1)->get();
        $aboutUs = Section::where('section_type_id',1)->first();
        $servicesBanners = Banner::where('banner_type_id',2)->get();
        $services = Section::where('section_type_id',2)->first();
        $contact = Section::where('section_type_id',3)->first();
        $galleryBanners = Banner::where('banner_type_id',3)->get();
        $gallery = Section::where('section_type_id',4)->first();
        $companyInfo = CompanyInfo::orderBy('created_at', 'desc')->first();
        $bannerIntermedio1 = Banner::where('banner_type_id',4)->first();
        $bannerIntermedio2 = Banner::where('banner_type_id',5)->first();
        $promotions = Section::where('section_type_id',5)->first();
        $promotionBanners = Banner::where('banner_type_id',6)->get();
        
        //Mapa
        $config = array();
        $config['center'] = '-33.454140,-70.846818';
        $config['zoom'] = 15;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                });
            }
            centreGot = true;';

            app('map')->initialize($config);

            $marker = array();
            app('map')->add_marker($marker);

            $map = app('map')->create_map();
            $map = array('map_js' => $map['js'], 'map_html' => $map['html']);

            return view('welcome',compact('homeBanners','aboutUs','servicesBanners','services','companyInfo','contact','gallery','galleryBanners','bannerIntermedio1','bannerIntermedio2','promotions','promotionBanners','map'));
        }
    }
