<?php

namespace App\Http\Controllers\Dashboard\Structure;

use App\Http\Requests\Dashboard\Structure\PrivacyTermsRequest;
use Illuminate\Http\Request;

class ContactUsStructureController extends StructureController
{
    protected string $contentKey = 'contact-us';
    protected array $locales = ['en', 'ar'];

    public function store(Request $request)
    {
        return parent::_store($request);
    }
}
