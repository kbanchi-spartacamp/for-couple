<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-center text-lg font-bold pt-6">{{ $husband->name }}</h2>
                <div class="flex text-sm mb-4">
                    <div>
                        <img class="rounded-full object-cover" src="/storage/images/men.png" alt="">
                    </div>
                    <div>
                        <div class="border border-gray-900 px-2 h-7 leading-7 rounded-full">
                            家事
                        </div>
                        <p class="mt-4 text-md text-gray-600">
                            ○○してほしい。
                        </p>
                        <p class="mt-4 text-md text-gray-600">
                            ○○してほしい。
                        </p>
                        <p class="mt-4 text-md text-gray-600">
                            ○○してほしい。
                        </p>
                        <div class="border border-gray-900 px-2 h-7 leading-7 rounded-full">
                            仕事
                        </div>
                        <p class="mt-4 text-md text-gray-600">
                            ○○してほしい。
                        </p>
                        <p class="mt-4 text-md text-gray-600">
                            ○○してほしい。
                        </p>
                        <p class="mt-4 text-md text-gray-600">
                            ○○してほしい。
                        </p>
                    </div>
                </div>
                <div>
                    直近のスコア
                    <a href=""
                        class="bg-gradient-to-r bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-2 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500 w-full sm:w-32 sm:mr-2 mb-2 sm:mb-0 ml-2">過去のスコアを見る</a>
                    <img class="rounded-full object-cover" src="/storage/images/score.png" alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
