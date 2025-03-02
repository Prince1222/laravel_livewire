<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use App\Filament\Resources\MemberResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Categories Created')
        ->body('Categories created successfully.');
        //etech
}
}
