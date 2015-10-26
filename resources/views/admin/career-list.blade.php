
@include('layouts.header')

       
         <section class="content-header">
          <h1>
            Career List
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
         
            <li class="active">Album List</li>
          </ol>
        </section>
        <section class="content " >

            <!-- Small boxes (Stat box) -->
            <div class="row">
    
                <div >
                    <div class="well description-textarea actual-div base-div pull-left hundred-percent" >
                    
                   
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                email
                            </th>
                            <th>
                                Telephone
                            </th>
                            <th>
                                Applied For
                            </th>
                            <th>
                                Resume
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                     <?php

                       foreach($careers AS $career)
                       {
                    ?>
                        <tr>
                            <td>
                                {{ $career->name }}
                            </td>
                            <td>
                                {{ $career->address }}
                            </td>
                            <td>
                                {{ $career->email }}
                            </td>
                            <td>
                                {{ $career->telephone }}
                            </td>
                            <td>
                                {{ $career->applied_for }}
                            </td>
                            <td>
                                <a href='/uploads/careers/<?php echo $career->file_location ?>' target='_blank'>RESUME</a>
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