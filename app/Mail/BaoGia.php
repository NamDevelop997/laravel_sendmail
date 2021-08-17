<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BaoGia extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public $masp;
    public function __construct($data)
    {
        $this->data = $data;
        foreach($this->data as $key){
            $this->masp = $key['ma_sp'];
        }
    }

    public function build()
    {

        return $this->view('mails.baogia')
            ->from("namdevelop997@gmail.com", 'UNISMART')
            ->subject("Thư xác nhận đơn hàng đặt thành công mã {$this->masp}")
            ->with([
                // nếu ko khai báo dữ liệu chuyển sang dạng mảng thì nó sẽ báo lỗi:
                // ErrorException
                // Illegal offset type
                $this->data
            ]);
    }
}
