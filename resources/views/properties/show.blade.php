@extends('base')
@section('title','detail du produit')
@section('hero')
.
@endsection
@section('content')


        <div class=" flex flex-col m-24   lg:m-24 lg:mt-24 bg-white   ">
            <!--header-->
            <p>.</p>
            <div class="flex flex-col justify-between lg:flex-row lg:ml-16 lg:mt-4 ">
                <div>
                    <div>
                        <h3 class="sm:text-sm lg:text-3xl   font-mono">New Apartment Nice View</h3>
                    </div>
                    <div class="flex flex-row lg:mt-2">
                        <span class="bg-green-600 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 border border-gray-500">A vendre</span>
                    </div>
                    <div>
                        <h3 class="sm:text-sm text-2xl">New york</h3>
                    </div>
                </div>
                <div class="m-4 ">
                    <div><p class="sm:text-sm lg:text-5xl ">$11,000/mo</p></div>
                </div>

            </div>
            <!--header-->
            <div class="flex  flex-col lg:flex-row lg:w-full ">


                <div class="grid gap-4 lg:w-2/3 lg:m-16 lg:mt-6">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
                    </div>
                    <div class="grid grid-cols-5 gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                        </div>
                    </div>
                </div>


                <div class="lg:w-1/3">
                    <form action="https://fabform.io/f/{form-id}" method="post" class="md:col-span-8 p-10 ">
                        <div class="flex flex-wrap -mx-3 mb-6 ">
                            <div class="w-full md:w-1/2 px-3 mt-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-last-name">
                                    preNom
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" type="text" placeholder="Doe">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-last-name">
                                    Nom
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" type="text" placeholder="Doe">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-password">
                                    adresse mail
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-email" type="email" placeholder="********@*****.**">
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-password">
                                    ton message
                                </label>
                                <textarea rows="5"
                                          class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "></textarea>
                            </div>
                            <div class="flex justify-between w-full px-3">

                                <button
                                    class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                                    type="submit">
                                    Send Message
                                </button>

                            </div>

                        </div>

                    </form>
                </div>
            </div>
            <div class="flex flex-col gap-3 lg:flex lg:flex-row lg:gap-4 lg:m-20 lg:mt-2 lg:justify-between ">
                <div class="">
                    <div class="grid grid-cols-1 divide-y">
                        <div class="mb-8"><p class="text-4xl">Description</p></div>
                        <div ><p class="mt-8 text-sm ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p></div>

                    </div>
                </div>
                <div class="lg:w-[200rem]">
                    <div class="">
                        <div class="grid grid-cols-1 divide-y">
                            <div class="mb-8"><p class="text-4xl">Details</p></div>
                            <div>
                                <div class="  bg-white rounded-lg shadow-md overflow-hidden mt-4">
                                 <div class="lg:flex lg:flex-row lg:justify-between">
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="flex flex-col items-start justify-between mb-6">
                                            <span class="text-sm font-medium text-gray-600">Nom proprietaire</span>
                                            <span class="text-lg font-medium text-gray-800">John Doe</span>
                                        </div>
                                        <div class="flex flex-col items-start justify-between mb-6">
                                            <span class="text-sm font-medium text-gray-600">Adresse</span>
                                            <span class="text-lg font-medium text-gray-800">thies</span>
                                        </div>
                                        <div class="flex flex-row items-center justify-between mb-6">
                                            <div class="flex flex-col items-start">
                                                <span class="text-sm font-medium text-gray-600">Category</span>
                                                <span class="text-lg font-medium text-gray-800">villa</span>
                                            </div>
                                    </div>
                                        <div class="flex flex-col items-start">
                                            <span class="text-sm font-medium text-gray-600">Surface </span>
                                            <span class="text-lg font-medium text-gray-800">12 m2</span>
                                        </div>
                                 </div>

                                     <div class="px-4 py-5 sm:p-6">
                                         <div class="flex flex-col items-start justify-between mb-6">
                                             <span class="text-sm font-medium text-gray-600">Année de construction</span>
                                             <span class="text-lg font-medium text-gray-800">2001</span>
                                         </div>
                                         <div class="flex flex-col items-start justify-between mb-6">
                                             <span class="text-sm font-medium text-gray-600">Chambre</span>
                                             <span class="text-lg font-medium text-gray-800">4</span>
                                         </div>
                                         <div class="flex flex-row items-center justify-between mb-6">
                                             <div class="flex flex-col items-start">
                                                 <span class="text-sm font-medium text-gray-600">Salle de bain </span>
                                                 <span class="text-lg font-medium text-gray-800">3</span>
                                             </div>


                                         </div>
                                         <div class="flex flex-col items-start">
                                             <span class="text-sm font-medium text-gray-600">Garage </span>
                                             <span class="text-lg font-medium text-gray-800">1</span>
                                         </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
