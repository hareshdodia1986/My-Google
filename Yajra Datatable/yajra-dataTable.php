// how to intall

//Official website link

https://yajrabox.com/docs/laravel-datatables/master/installation

//copy inslation code and pest in cmd and compose update

composer require yajra/laravel-datatables

//after instalation 

Open the file config/app.php and then add following service provider.

'providers' => [
    
    Yajra\DataTables\DataTablesServiceProvider::class,
],

and 
    'aliases' => [
    'DataTables'=>\Yajra\DataTables\Facades\DataTable::class,
    ],

//After completing the step above, use the following command to publish configuration & assets:

	php artisan vendor:publish --tag=datatables

// tyar baad datatable name create karvu  
// table name App ma DataTables Ma avi jase

 php artisan datatables:make Student

 //table bani gya baad je field na name table ma rakhva hoy te

  protected function getColumns()
    {
        return [
            'name',
            'email',
            'phone',
            'city'
        ];
    }


//controller
// render() ma view call karavvo 
//function ma tablename call karvu

 public function index(StudentDataTable $dataTable)
    {
        return $dataTable->render('student');
    }

 // call route

 //view
 // table ma bootstrap na class use kari sakay chhe
 // table load na thay to php artisan  optimize kari levu

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Record</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>
<body style="background: orange;">
	<section style="padding-top:60px">
		<div class="container">
			<div class="row">
				<div class="col-md-8 table table-success table-striped">
					{!! $dataTable->table() !!}					
				</div>
				<div class="col-md-4">
					<form>
						  add student hire
					</form>
				</div>
			</div>
		</div>
	</section>
	{!! $dataTable->scripts() !!}
</body>
</html>