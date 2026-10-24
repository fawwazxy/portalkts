<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use App\Models\Certificate;
use File;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $certificates = Certificate::orderBy('id')->get();
        return view('certificate.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add()
    {
        return view('certificate.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCertificateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCertificateRequest $request)
    {
        $certificate = new Certificate();

        $certificate->name = $request->input('name');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = str_replace(' ', '_', $file->getClientOriginalName());

            $upload_path = '/assets/certificate/';
            $attachment_name = time() . '_' . $file_name;

            $url_img = $upload_path . $attachment_name;

            //Move attachment from temporary folder to project folder
            $file->move(public_path($upload_path), $url_img);

            $certificate->url_img = $url_img;
        }

        if ($certificate->save()) {
            return redirect(route('certificate.index'))->withStatus('Successfully update!');
        }

        return back()->withErrors('Failed to update!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $certificates = Certificate::find($id); //single data of user
        return view('certificate.show', compact('certificates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $certificates = Certificate::find($id); //single data of user
        return view('certificate.edit', compact('certificates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCertificateRequest  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCertificateRequest $request, $id)
    {

        $certificate = Certificate::findOrFail($id);

        $certificate->name = $request->input('name');

        if ($certificate->save()) {
            if($request->hasFile('image')){

                $destination = '/assets/certificate/'.$certificate->url_img;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }

                $file = $request->file('image');
                $file_name = str_replace(' ', '_', $file->getClientOriginalName());

                $upload_path = '/assets/course/';
                $attachment_name = time() . '_' . $file_name;

                $url_img = $upload_path . $attachment_name;

                //Move attachment from temporary folder to project folder
                $file->move(public_path($upload_path), $url_img);

                $certificate->url_img = $url_img;
                $certificate->save();
            }

            return redirect(route('certificate.index'))->withStatus('Successfully update!');
        }

        return back()->withError('Failed to update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $certificates = Certificate::findOrFail($id);

        if ($certificates->delete()) {
            return redirect(route('certificate.index'))->withStatus('Successfully delete certificate!');
        }

        return back()->withErrors('Failed to delete certificate!');
    }

}
