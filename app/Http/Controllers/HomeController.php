<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function showHomePage()
    {
        $postAllActive = $this->postRepository->allActive();

        return view('pages/home', [
            'post_all_active' => $postAllActive
        ]);
    }
}
