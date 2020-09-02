<div class="bg-blue-100 mb-4 px-4 py-4 border rounded border-gray-500">

    <div class="flex justify-center">
        <div class="w-3/4">
            <h2 class="text-xl font-bold mb-2">
                {{ $dog -> name }}
            </h2>

            <p>
                {{ $dog -> breed }}
            </p>

            <p>
                Score: {{ $dog -> score }}
            </p>
        </div>
        <div class="w-1/4">
            <img src="{{ $dog -> image_url () }}" />
        </div>
    </div>
</div>