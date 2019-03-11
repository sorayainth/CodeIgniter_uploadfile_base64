  <?php 

  public function upload_formbook() {

          $filename = sha1(random_string('alnum', 512));
          $data = base64_encode(file_get_contents($_FILES["file"]['tmp_name']));

            file_put_contents('uploads/files/'.$filename.'.txt', $data);

        if ($this->member_model->peer_review_file($filename) == false) {

			$this->message_add_error();

        }else{

        	$this->message_add_success();
        }

  }