@extends('layouts.app')

@section('title', __('Detail of Questions'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Questions') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of question.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('questions.index') }}">{{ __('Questions') }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ __('Detail') }}
                    </li>
                </x-breadcrumb>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <tr>
                                            <td class="fw-bold">{{ __('Question') }}</td>
                                            <td>{{ $question->question }}</td>
                                        </tr>
									<tr>
                                            <td class="fw-bold">{{ __('Description') }}</td>
                                            <td>{{ $question->description }}</td>
                                        </tr>
									<tr>
                                        <td class="fw-bold">{{ __('Subject') }}</td>
                                        <td>{{ $question->subject ? $question->subject->name : '' }}</td>
                                    </tr>
									<tr>
                                        <td class="fw-bold">{{ __('Lesson') }}</td>
                                        <td>{{ $question->lesson ? $question->lesson->name : '' }}</td>
                                    </tr>
									<tr>
                                        <td class="fw-bold">{{ __('Unit') }}</td>
                                        <td>{{ $question->unit ? $question->unit->name : '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $question->created_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $question->updated_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <a href="{{ url()->previous() }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
