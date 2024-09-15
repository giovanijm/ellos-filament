<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['price'] = ((float) str_replace(['.',','],['','.'], $data['price'])) * 100;
    //     //$data['slug'] = Str::slug($data['name']);

    //     return $data;
    // }
}
