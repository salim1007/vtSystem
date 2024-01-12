
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel 7 PDF Example</title>
    </head>
    <body>

    <div class="container mt-5">
        <h2 class="text-center mb-3">PDF Generator</h2>
        <div>
        </div>
        <table class="table table-bordered mb-5">
            <thead>
            <tr class="table-danger">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">reg</th>
                <th scope="col">year</th>
                <th scope="col">college</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $candidate)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $candidate->id }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $candidate->full_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $candidate->reg_no }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $candidate->year }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $candidate->college }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </body>
    </html>




