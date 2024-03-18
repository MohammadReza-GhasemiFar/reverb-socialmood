<?php

namespace App\Livewire;

use App\Events\EmojiClicked;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Live Social Mood')]
class HomePage extends Component
{
    /**
     * Receive User's Selected Emoji To Broadcast
     * @param string $emoji
     * @return void
     */
    public function broadcast(string $emoji): void
    {
        event(new EmojiClicked($emoji));
    }

}
