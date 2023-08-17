<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __construct(public $title = 'Pengaturan')
    {
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $title = $this->title;
        return view('profile.edit', [
            'title' => $title,
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * update profile picture
     */

    public function updateProfilePicture(Request $request)
    {
        $user = $request->user();

        if ($request->has('image') && $request->file('image')->isValid()) {
            $user->clearMediaCollection('pengguna');
            $user->addMediaFromRequest('image')->toMediaCollection('pengguna');
        }

        return back()->with('status', 'profile-picture-updated');
    }
}
