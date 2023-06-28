<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\AppliedScholarship;
use DB;
use App\Models\User;

use Intervention\Image\Facades\Image;


class ProfileController extends Controller
{

    // function to update user profile
    public function updateProfile(Request $request){

        // getting the login user
        $user = Auth::user();

        // combining the furst and last name of user from form to save in the name variable as a single name
        // $name = $request->first_name.' '.$request->last_name;

        $image = $request->file('userImage');

        // Validate the uploaded image if necessary
        // $request->validate([
        //     'image' => 'required|image',
        // ]);

        // dd($image);

        // Read the contents of the image file
        if($image!=NULL){
            // $imageData = file_get_contents($image->getRealPath());

            $imageData = $image->get();

            // dd($imageData);
            // update the login user record
            $user->update([
                'name' => $request->name,
                'email' => $request->emailAddress,
                'user_image' => $imageData,
                // 'password' => md5($request->password),
            ]);
        }
        else{
            // update the login user record
            $user->update([
                'name' => $request->name,
                'email' => $request->emailAddress,
            ]);
        }


        // logout the user after account settings are changed
        // return redirect()->route('logout');
        // return redirect()->route('profile');
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    // / function to show profile of user with details

    public function showProfile(){

        // get the applied scholarships data of user
        // $appliedScholarships = AppliedShcolarship::where('applied_scholarship_user_id', Auth::user()->id)->get();
        

        $appliedScholarships = DB::table('applied_scholarships')
                            ->join('scholarships', 'applied_scholarships.applied_scholarships_scholarship_id', '=', 'scholarships.scholarship_id')
                            ->join('users', 'applied_scholarships.applied_scholarships_user_id', '=', 'users.id')
                            ->select('applied_scholarships.applied_scholarships_status', 'applied_scholarships.created_at', 'scholarships.scholarship_name', 'scholarships.scholarship_last_date')
                            ->where('applied_scholarships.applied_scholarships_user_id', Auth::user()->id)
                            ->get();


        // $appliedScholarships = DB::table('applied_scholarships')
        //                         ->join('scholarships', 'applied_scholarships.applied_scholarships_scholarship_id', '=', 'scholarships.scholarship_id')
        //                         ->select('applied_scholarships.applied_scholarships_status', 'applied_scholarships.created_at', 'scholarships.scholarship_name', 'scholarships.scholarship_last_date')
        //                         ->get();


    //     // get the authenticated user
    // $user = User::findOrFail(Auth::user()->id);

        // Get the image path
    // $imagePath = storage_path('app/public/' . $user->image);

    // // Create a new instance of Imagick
    // $image = new \Imagick($imagePath);

    // // Manipulate the image as needed
    // // Example: Resize the image to a specific width and height
    // $image->resizeImage(300, 200, \Imagick::FILTER_LANCZOS, 1);

    // // Convert the image to JPEG format
    // $image->setImageFormat('jpeg');

    // // Get the compacted image data
    // $compactedImageData = $image->getImageBlob();

    // // Encode the image data as base64
    // $base64Image = base64_encode($compactedImageData);

    // // Clean up the Imagick instance
    // $image->clear();
    // $image->destroy();

    // // Set the appropriate headers for the response
    // $headers = [
    //     'Content-Type' => 'image/jpeg',
    //     'Content-Disposition' => 'inline; filename="compacted_image.jpg"',
    // ];

    // // Merge the scholarships data with the compacted image data
    // $responseData = [
    //     'appliedScholarships' => $appliedScholarships,
    //     'image' => $compactedImageData,
    // ];

    
// // Return the response with the base64-encoded image data
// return response()->json(['user' => $userData, 'image' => $base64Image], 200, $headers);

        // get the authenticated user
        $user = User::findOrFail(Auth::user()->id);

        // using intervention image gettin the image

        $image = $user->user_image;

        $base64Image = base64_encode($image);

        // $imageInstance = Image::make($imageData);

        // $imageInstance->resize(300, 200);

        // $base64Image = $imageInstance->encode('data-url');

        // Pass the scholarships and image data to the view
        return view('account.account', compact('appliedScholarships', 'base64Image'));


        // return the profile view with the data

        // return view('account.account', compact('appliedScholarships'));

    }
}
