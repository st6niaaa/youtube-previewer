<div class="flex gap-6 items-start w-full max-w-4xl">
    <div class="bg-white rounded-xl p-6 w-full max-w-sm shadow-md">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Video Details</h2>
        <form class="space-y-4">
            <div>
                <label for="video-title" class="block text-sm font-medium text-gray-700">Video Title</label>
                <input 
                    type="text" 
                    id="video-title"
                    wire:model.lazy="title"
                    placeholder="Enter video title"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >
            </div>

            <div>
                <label for="thumbnail-url" class="block text-sm font-medium text-gray-700">Thumbnail URL</label>
                <input 
                    type="url" 
                    id="thumbnail-url" 
                    wire:model.lazy="url"
                    placeholder="Enter thumbnail URL"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >
            </div>

            <div>
                <label for="thumbnail-url" class="block text-sm font-medium text-gray-700">Thumbnail URL</label>
                <input 
                    type="url" 
                    id="channel-url" 
                    wire:model.lazy="channel_url"
                    placeholder="Enter channel URL"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >
            </div>

            <div>
                <label for="channel-name" class="block text-sm font-medium text-gray-700">Channel Name</label>
                <input 
                    type="text" 
                    id="channel-name" 
                    wire:model.lazy="name"
                    placeholder="Enter channel name"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >
            </div>

            <div>
                <label for="video-views" class="block text-sm font-medium text-gray-700">Views</label>
                <input 
                    type="number" 
                    id="video-views" 
                    wire:model.lazy="views"
                    placeholder="Enter view count"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >
            </div>

            <div>
                <label for="upload-time" class="block text-sm font-medium text-gray-700">Upload Time</label>
                <input 
                    type="text" 
                    id="upload-time" 
                    wire:model.lazy="upload_time"
                    placeholder="e.g., 3 hours ago"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >
            </div>
        </form>
    </div>

    <div class="bg-white rounded-xl w-full max-w-xs overflow-hidden shadow-md">
        <img 
            src="{{ $url }}" 
            alt="Video Thumbnail" 
            class="w-full aspect-[16/9] bg-gray-300 object-cover"
        >
        <div class="p-4">
            <div class="flex gap-3 items-start">
                <img 
                    src="{{ $channel_url }}" 
                    alt="Channel Avatar" 
                    class="w-9 h-9 rounded-full bg-gray-300 flex-shrink-0"
                >
                <div class="flex-grow">
                    <h3 class="text-lg font-medium text-gray-900">{{ $title }}</h3>
                    <p class="text-sm text-gray-500">{{ $name }}</p>
                    <p class="text-sm text-gray-500">
                        {{ number_format($views) }} views
                        <span class="mx-1">•</span>
                        {{ $upload_time }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
