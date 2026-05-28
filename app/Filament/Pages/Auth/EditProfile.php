<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\EditProfile as BaseEditProfile;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EditProfile extends BaseEditProfile
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user')
                    ->required()
                    ->label('Usuário')
                    ->maxLength(255),

                TextInput::make('name')
                    ->required()
                    ->label('Nome')
                    ->maxLength(50),

                $this->getEmailFormComponent(),

                TextInput::make('password')
                    ->label('Nova senha')
                    ->password()
                    ->revealable()
                    ->nullable()
                    ->minLength(8)
                    ->same('password_confirmation')
                    ->validationMessages([
                        'min' => 'A senha deve ter pelo menos 8 caracteres.',
                        'same' => 'As senhas não conferem.',
                    ])
                    ->dehydrated(fn ($state) => filled($state))
                    ->dehydrateStateUsing(fn ($state) => \Illuminate\Support\Facades\Hash::make($state)),

                TextInput::make('password_confirmation')
                    ->label('Confirmar nova senha')
                    ->password()
                    ->revealable()
                    ->nullable()
                    ->dehydrated(false),
            ]);
    }
    
    protected function afterSave(): void
    {
        $this->form->fill([
            ...$this->form->getState(),
            'password' => null,
            'password_confirmation' => null,
        ]);
    }
}