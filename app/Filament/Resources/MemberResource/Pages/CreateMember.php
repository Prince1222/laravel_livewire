<?php

namespace App\Filament\Resources\MemberResource\Pages;

use Filament\Notifications\Notification;
use App\Filament\Resources\MemberResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Member Created')
        ->body('Member created successfully.');
}
}
