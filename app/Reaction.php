<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// UserとUserの多：多を表す中間テーブル
class Reaction extends Model
{
    public $incrementing = false; // インクリメントIDを無効化
    public $timestamps = false; // update_at, created_at を無効化

    // 一つのリアクション先ユーザを表す
    public function toUserId()
    {
        // belongsTo(相手のモデル名, 自モデルのID, 相手のID名) で紐づける
        return $this->belongsTo('App\User', 'to_user_id', 'id');
    }

    // 一つのリアクション元ユーザを表す
    public function fromUserId()
    {
        return $this->belongsTo('App\User', 'from_user_id', 'id');
    }
}
