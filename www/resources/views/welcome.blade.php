<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>

    <link href="https://tailwindcomponents.com/css/component.dashboard-template.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->
  
    <script src="https://cdn.tailwindcss.com"></script>    

	<!--Regular Datatables CSS-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" />
    

    <style>
		/*Overrides for Tailwind CSS */

		/*Form fields*/
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			color: #4a5568;
			/*text-gray-700*/
			padding-left: 1rem;
			/*pl-4*/
			padding-right: 1rem;
			/*pl-4*/
			padding-top: .5rem;
			/*pl-2*/
			padding-bottom: .5rem;
			/*pl-2*/
			line-height: 1.25;
			/*leading-tight*/
			border-width: 2px;
			/*border-2*/
			border-radius: .25rem;
			border-color: #edf2f7;
			/*border-gray-200*/
			background-color: #edf2f7;
			/*bg-gray-200*/
		}

		/*Row Hover*/
		table.dataTable.hover tbody tr:hover,
		table.dataTable.display tbody tr:hover {
			background-color: #ebf4ff;
			/*bg-indigo-100*/
		}

		/*Pagination Buttons*/
		.dataTables_wrapper .dataTables_paginate .paginate_button {
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Current selected */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #1D4ED8 !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #1D4ED8 !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Add padding to bottom border */
		table.dataTable.no-footer {
			border-bottom: 1px solid #e2e8f0;
			/*border-b-1 border-gray-300*/
			margin-top: 0.75em;
			margin-bottom: 0.75em;
		}

		/*Change colour of responsive icon*/
		table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
		table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
			background-color: #1D4ED8 !important;
			/*bg-indigo-500*/
		}
	</style>




</head>
<body style="background: #edf2f7;">
    <div>
    <div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-blue-700">
               
                
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <h3 class="text-gray-700 text-3xl font-medium text-center py-8">CRUD Desktop Application</h3>
                    <div>
                    <p class="text-center text-lg text-red-500"> </p>
                    </div>
                    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</di>
@endif
                    <div class="flex flex-col justify-center md:justify-start my-auto pt-9 md:pt-0 px-9 ">
                    
                    <form class="flex flex-col pt-3 " action="/dashboard/update" method="post">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Full name
                                      </label>
                                      <input type="text" name="fname" value="" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Full name" required />                        
                                </div>
                                  <div class="w-full md:w-1/2 px-3">
                                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Address
                                    </label>
                                   <input type="text" name="address" value="" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Address" required/>                        
                                 </div>
                                </div>
                                
                               
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                      Phone number
                                      </label>
                                      <input type="text" name="pnumber" value="" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Phone number" required />                        
                                  </div>
                                    <div class="w-full md:w-1/2 px-3">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                      Email
                                      </label>
                                      <input type="text" name="email" value="" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Email"required />                        
                                  </div>
                                  </div>
                                  <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                      Work Time
                                    </label>
                                      <input type="text" name="worktime" value="" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Work Time" required/>                        
                                  </div>
                                    <div class="w-full md:w-1/2 px-3">
                                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                      Additional information
                                      </label>
                                      <input type="text" name="description" value="" class="text-gray-700 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-blue-700 focus:ring-blue-700 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Additional information" required/>                        
                                  </div>
                                  </div>
                                  
                                
                                  <input type="hidden" name="id" value="">
                                  <input type="submit" value="Update" class="bg-blue-700 text-white font-bold text-lg hover:bg-blue-500 p-2 mt-8 rounded-lg">
                               
                              </form>
                        <div class="text-center pt-12 pb-12">
                        </div>
                    </div>
                    </div>
              
              
              
                      <!--Card-->
                      <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
              
              
                      <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">                              
                      <thead>
                                  <tr>
                                      <th data-priority="1">Full name</th>
                                      <th data-priority="2">Address</th>
                                      <th data-priority="3">Phone Number</th>
                                      <th data-priority="4">Email</th>
                                      <th data-priority="5">Work Time</th>
                                      <th data-priority="6">additional information</th>
                                      <th data-priority="8">Edit</th>
                                      <th data-priority="9">Delete</th>


                                    </tr>
                              </thead>
                              <tbody>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>	
                                            <td></td>	
                                            <td></td>	
                                            <td></td>	

                                            <td></td> 
                                            <td></td>
              
                                  <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
              
                                  
                              </tbody>
              
                          </table>
              
              
                      </div>
                      <!--/Card-->
                  <div class="text-center pt-12 pb-12">
                  </div>
              
                  </div>
                  <!--/container-->

                  <!-- jQuery -->
                  < <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
     <script type="text/javascript">
         $(function () {
             $('#example').DataTable({
                 dom: 'Bfrtip',
                 buttons: [
           
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4, 5 ]

                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4, 5 ]
                }
            },
            'colvis'
        ]
             });
         });
     </script>
              
                    
            </main>
        </div>
    </div>
</div>
</body>
</html>