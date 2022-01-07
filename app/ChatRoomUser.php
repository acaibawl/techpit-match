<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Userが複数のChatRoomに所属するための中間モデル
class ChatRoomUser extends Model
{
    protected $fillable = ['chat_room_id', 'user_id'];

    public function chatRoom()
    {
        return $this->belongsTo('App\ChatRoom');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
