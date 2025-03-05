<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    

    <style type="text/tailwindcss">
        .btn {
          @apply bg-white rounded-md px-4 py-2 text-center font-medium text-slate-500 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 h-10;
        }
    
        .input {
          @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none rounded-md border-slate-300;
        }
    
        .filter-container {
          @apply mb-4 flex space-x-2 rounded-md bg-slate-100 p-2;
        }
    
        .filter-item {
          @apply flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-sm font-medium text-slate-500;
        }
    
        .filter-item-active {
          @apply bg-white shadow-sm text-slate-800 flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-sm font-medium;
        }
    
        .book-item {
          @apply text-sm rounded-md bg-white p-4 leading-6 text-slate-900 shadow-md shadow-black/5 ring-1 ring-slate-700/10;
        }
    
        .book-title {
          @apply text-lg font-semibold text-slate-800 hover:text-slate-600;
        }
    
        .book-author {
          @apply block text-slate-600;
        }
    
        .book-rating {
          @apply text-sm font-medium text-slate-700;
        }
    
        .book-review-count {
          @apply text-xs text-slate-500;
        }
    
        .empty-book-item {
          @apply text-sm rounded-md bg-white py-10 px-4 text-center leading-6 text-slate-900 shadow-md shadow-black/5 ring-1 ring-slate-700/10;
        }
    
        .empty-text {
          @apply font-medium text-slate-500;
        }
    
        .reset-link {
          @apply text-slate-500 underline;
        }
      </style>
</head>
<body>

    <div class="d-flex">
        @include('layouts.sidebar')

        <div class="content w-100">


            <div class="container mt-4">
                @yield('content')
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>

</body>

</html>
