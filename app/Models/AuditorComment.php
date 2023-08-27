<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class AuditorComment extends Model {
        use HasFactory;

        protected $fillable = ['message', 'cooperative_id', 'auditor_id'];

        public function auditor() {
            return $this->belongsTo(Auditor::class);
        }

        public function cooperative() {
            return $this->belongsTo(Cooperative::class);
        }
    }
