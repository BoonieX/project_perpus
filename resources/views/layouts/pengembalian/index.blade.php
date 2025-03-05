@extends('layouts.app')

@section('title', 'Daftar Pengembalian')

@section('content')
    <ul>
        @forelse ($pengembalians as $pengembalian)
            <li class="mb-4">
                <div class="book-item">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a href="{{ route('pengembalian.show', $pengembalian->id_pengembalian) }}" class="book-title">
                                Pengembalian #{{ $pengembalian->id_pengembalian }}
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        @empty
            <li class="mb-4">
                <div class="empty-book-item">
                    <p class="empty-text">Tidak ada data pengembalian</p>
                    <a href="{{ route('pengembalian.index') }}" class="reset-link">Reset criteria</a>
                </div>
            </li>
        @endforelse
    </ul>

    @if ($pengembalians->count())
        <nav class="mt-4">
            {{ $pengembalians->links() }}
        </nav>
    @endif
@endsection
