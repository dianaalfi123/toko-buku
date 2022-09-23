 <?php $this->load->view('template/header') ?>
 <?php $this->load->view('template/sidebar') ?>

 <!-- Main content -->
 <div class="main-content" id="panel">
     <?php
        // echo 'ini ' . $view;

        $this->load->view($view)

        ?>
 </div>

 <?php $this->load->view('template/footer') ?>