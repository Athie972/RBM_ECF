<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RBM</title>
</head>
<body>
    <h1>LES ADHÉRENTS</h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                    NOM
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Prénom
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Numéro de Téléphone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        modifier
                    </th>
                    <th scope="col" class="px-6 py-3">
                        supprimer
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($adherents as $adherent)
                    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$adherent->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{$adherent->firstname}}
                    </td>
                    <td class="px-6 py-4">
                        {{$adherent->email}}
                    </td>
                    <td class="px-6 py-4">
                        {{$adherent->phone_number}}
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('adherent.destroy', ['id' => $adherent->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-edit">modifier</button>
                        </form>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('adherent.destroy', ['id' => $adherent->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-delete">supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    

</body>
</html>