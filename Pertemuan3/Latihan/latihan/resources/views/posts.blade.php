<x-layout>
    <x-slot:title>
        Posts
    </x-slot:title>

    @if ($posts->count())

        @foreach ($posts as $post)
            <article class="mb-4 border-bottom pb-3">
                <h2>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h2>

                <p>
                    By <strong>{{ $post->author->name }}</strong>
                    in <strong>{{ $post->category->name }}</strong>
                </p>

                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach

    @else
        <p>Tidak ada post ditemukan.</p>
    @endif
</x-layout>