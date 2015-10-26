
@include('layouts.header')

       
         <section class="content-header">
          <h1>
            Add Album
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
         
            <li class="active">Project List</li>
          </ol>
        </section>
        <section class="content " >

            <!-- Small boxes (Stat box) -->
            <div class="row">
    
                <div >
                    <div class="well description-textarea actual-div base-div pull-left hundred-percent" >
                    
                    <?php
                if($errors->any())
                        {
                            echo implode('', $errors->all('<div style="color:red">:message</div>'));
                        }
?>
                        <table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>
                                        SI
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Location
                                    </th>
                                    <th>
                                        Overview
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                </th>
                            </thead>
                            <tbody>
                        <?php
                        $count = 1;
                       foreach($projects AS $project)
                       {
                           
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $count++; ?>
                                    </td>
                                    <td>
                                        <?php echo $project['name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $project['name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $project['location'] ?>
                                    </td>
                                    <td>
                                        <?php echo $project['overview'] ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="/admin/edit-project/<?php echo $project['id']?>">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" href="/admin/delete-project/<?php echo $project['id']?>">Delete</a>
                                    </td>
                                    
                                </tr>
                        
                        <?php
                       }
                       ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </section>

   @include('layouts.footer')