<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Message implements ShouldBroadcast
{
    // use Dispatchable, InteractsWithSockets, SerializesModels;

    // /**
    //  * Create a new event instance.
    //  *
    //  * @return void
    //  */
    // public $username;
    // public  $message;
    // public function __construct($username,$message)
    // {
    //     $this->username =$username;
    //     $this->message = $message;
    // }


    // public function broadcastOn()
    // {
    //     // return new PrivateChannel('channel-name');

    //     return new Channel('chat');
    // }

    // public function broadcastAs()
    // {


    //     return 'message';
    // }

    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $text,$receiverId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($text,$receiverId)
    {
        $this->text = $text;
        $this->receiverId = $receiverId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        $channel = 'chat-channel'.$this->receiverId;
        return new Channel($channel);
    }
    public function broadcastAs()
    {
        return 'chat-submitted';
    }
}
