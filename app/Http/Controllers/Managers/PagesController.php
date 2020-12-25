<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutPageUpdateRequest;
use App\Http\Requests\ContactPageUpdateRequest;
use App\Http\Requests\HomePageUpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePageUpdate(HomePageUpdateRequest $request)
    {
        $page = Page::getPage('home_page');
        $page->update([
            'content' => json_encode($request->validated())
        ]);
        return redirect()->route('admin.pages');
    }

    public function aboutPageUpdate(AboutPageUpdateRequest $request)
    {
        $page = Page::getPage('about_page');

        $properties = $request->validated();
        if($properties['image'] === null){
            $properties['image'] = $page->content->image;
        }else{
            $properties['image'] = env('APP_URL') . '/storage/' . fileUploader($request->file('image'));
        }
        $page->update([
            'content' => json_encode($properties)
        ]);
        return redirect()->route('admin.pages');
    }

    public function contactPageUpdate(ContactPageUpdateRequest $request)
    {
        $page = Page::getPage('contact_page');
        $page->update([
            'content' => json_encode($request->validated())
        ]);
        return redirect()->route('admin.pages');
    }
}
