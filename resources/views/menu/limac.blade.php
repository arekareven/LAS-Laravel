@extends('layout.master')

@section('content')
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>5 C</h3>
                    </div>
                </div>
            </div>
            <section id="basic-modals">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Character</h4>
                            </div>
                            <div class="card-body">
                                <p>
                                    Toggle a modal via JavaScript by clicking the button above.
                                    You can use modal to add dialogs to your site for lightboxes, user
                                    notifications, or completely.
                                </p>
                                <!-- Button trigger for basic modal -->
                                <a href="{{ url("characterlist",) }}" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                    data-bs-target="#default">
                                    Input Data
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Capacity</h4>
                            </div>
                            <div class="card-body">
                                <p>
                                    Toggle a Boderless via JavaScript by clicking the button above. Use
                                    <code>.modal-borderless</code>
                                    with <code>.modal</code>for BorderLess modal.
                                </p>
                                <!-- Button trigger for BorderLess Modal -->
                                <button type="button" class="btn btn-outline-primary block"
                                    data-bs-toggle="modal" data-bs-target="#border-less">
                                    Input Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Capital</h4>
                            </div>
                            <div class="card-body">
                                <p>
                                    Toggle a Boderless via JavaScript by clicking the button above. Use
                                    <code>.modal-borderless</code>
                                    with <code>.modal</code>for BorderLess modal.
                                </p>
                                <!-- Button trigger for BorderLess Modal -->
                                <button type="button" class="btn btn-outline-primary block"
                                    data-bs-toggle="modal" data-bs-target="#border-less">
                                    Input Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cashflow</h4>
                            </div>
                            <div class="card-body">
                                <p>
                                    Toggle a Boderless via JavaScript by clicking the button above. Use
                                    <code>.modal-borderless</code>
                                    with <code>.modal</code>for BorderLess modal.
                                </p>
                                <!-- Button trigger for BorderLess Modal -->
                                <button type="button" class="btn btn-outline-primary block"
                                    data-bs-toggle="modal" data-bs-target="#border-less">
                                    Input Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Condition</h4>
                            </div>
                            <div class="card-body">
                                <p>
                                    Toggle a Boderless via JavaScript by clicking the button above. Use
                                    <code>.modal-borderless</code>
                                    with <code>.modal</code>for BorderLess modal.
                                </p>
                                <!-- Button trigger for BorderLess Modal -->
                                <button type="button" class="btn btn-outline-primary block"
                                    data-bs-toggle="modal" data-bs-target="#border-less">
                                    Input Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Collateral</h4>
                            </div>
                            <div class="card-body">
                                <p>
                                    Toggle a Boderless via JavaScript by clicking the button above. Use
                                    <code>.modal-borderless</code>
                                    with <code>.modal</code>for BorderLess modal.
                                </p>
                                <!-- Button trigger for BorderLess Modal -->
                                <button type="button" class="btn btn-outline-primary block"
                                    data-bs-toggle="modal" data-bs-target="#border-less">
                                    Input Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
