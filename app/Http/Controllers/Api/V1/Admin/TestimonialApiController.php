<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Http\Resources\Admin\TestimonialResource;
use App\Models\Testimonial;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestimonialApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('testimonial_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TestimonialResource(Testimonial::all());
    }

    public function store(StoreTestimonialRequest $request)
    {
        $testimonial = Testimonial::create($request->all());

        if ($request->input('avatar', false)) {
            $testimonial->addMedia(storage_path('tmp/uploads/' . basename($request->input('avatar'))))->toMediaCollection('avatar');
        }

        return (new TestimonialResource($testimonial))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Testimonial $testimonial)
    {
        abort_if(Gate::denies('testimonial_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TestimonialResource($testimonial);
    }

    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $testimonial->update($request->all());

        if ($request->input('avatar', false)) {
            if (!$testimonial->avatar || $request->input('avatar') !== $testimonial->avatar->file_name) {
                if ($testimonial->avatar) {
                    $testimonial->avatar->delete();
                }
                $testimonial->addMedia(storage_path('tmp/uploads/' . basename($request->input('avatar'))))->toMediaCollection('avatar');
            }
        } elseif ($testimonial->avatar) {
            $testimonial->avatar->delete();
        }

        return (new TestimonialResource($testimonial))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Testimonial $testimonial)
    {
        abort_if(Gate::denies('testimonial_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testimonial->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
