


$(document).ready(function(){
    // datatable code
    
    var table = $('#blogs').DataTable({
      processing: true,
      serverSide: true,
      responsive: true,
      autoWidth: true,
      order: [0,'desc'],
     "ajax": {
       'url' : baseUrl+'/getAllBlogs',
       'type': 'post',
       'data' : {
          '_token' : $("meta[name='csrf-token']").attr('content')
       },
     },
    
      columns: [
         {data: 'image', name: 'image'},
          {data: 'id', name: 'id'},
        {data: 'user_id', name: 'user_id'},
          {data: 'category_id', name: 'category_id'},
          
          {data: 'title', name: 'title'},
         {data: 'short_description', name: 'short_description'},
          
          {data: 'active', name: 'active'},
          {data: 'action', name: 'action', orderable : false, searchable:false},
          {data: 'action1', name: 'action1', orderable : false, searchable:false},
      ],
      "columnDefs" : [

      {
           "width" : "50%" , "targets" : 5
      },
       {
          "render" : function (data,type,row,meta)
          {
            return `<img src="${baseUrl}/images/blogsImages/${row.image}" style="width:60px;height:60px;"> `
          },
          "targets" : 0
        },
        {
          "render" : function (data,type,row,meta)
          {
            return `<a href=${baseUrl}/editBlogsAdmin/${row.id} class="btn btn-primary btn-sm editBlogs"><i class='fas fa-pencil-alt'></i>  Edit</a> `
          },
          "targets" : 7
        },
    
        {
          "render" : function (data,type,row,meta)
          {
            return `<a href="#" class="btn btn-danger btn-sm deleteBlog" id="${row.id}"><i class='far fa-trash-alt'></i>  Delete</a> `
          },
          "targets" : 8
        },
    
    
      ]
      
    });
    
    
    
     
    
      // delete blogs
    
      $(document).on('click','.deleteBlog',function(e){
    e.preventDefault();
    var id = $(this).attr('id');
    
    Swal.fire({
      title: 'Are you sure?',
      text: "Delete to this blog!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url:baseUrl+'/deleteBlog/'+ id,
          type:'GET',
          processData:false,
          contentType:false,
          success : function(data){
            Swal.fire({
              icon: 'success',
              title:'Success',
              text: 'Blog was deleted successfully',
            })
            table.ajax.reload();
          },
          error : function(data,textStatus,xhr)
          { 
            Swal.fire({
              icon: 'error',
              title:'not found',
              text: 'sorry data was not found',
            })
        
        
          },
        })
      }
    })
    
    
    
      });
    
      



      });