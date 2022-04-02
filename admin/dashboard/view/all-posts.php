<?php 

//var_dump($posts_query);
// if($posts_query > 0){
//     $all_posts = mysqli_fetch_array($posts_dbquery);
//     //$username = $row['user_name'];
// }
 ?>

  <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">All Posts</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        	<th>S.No</th>
                            <th>Title</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        	<th>S.No</th>
                            <th>Title</th>
                            <th>Category</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    	<?php 
                    	$count = 1;
                    	foreach ($posts as $post) {
                    		echo '<tr>';
                        	echo '<td>'. $count. '</td>';
                            echo '<td>'. $post['post_title'].'</td>';
                            echo '<td>'. $post['category_id']. '</td>';
                        	echo '</tr>';
                        	$count++;
                    	} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->