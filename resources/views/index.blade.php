<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Server</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body>
    <div class="root container-fluid p-4">
        <div class="d-flex kanban">
            <div class="d-flex gap-x-2 kanban__list">
                {{-- Incomplate --}}
                <div id="inconplate-list" class="d-flex flex-column kanban__list__item">
                    <div class="d-flex justify-content-between align-items-center kanban__list__item--header py-4 px-3">
                        <div class="d-flex align-items-center gap-x-1">
                            <div class="tag tag--red"></div>
                            <h5 class="p-0 m-0">Incomplate</h5>
                        </div>
                        <div><span class="px-2 py-1 rounded fw-bold bg-white">0</span></div>
                    </div>
                    <div class="kanban__list__item--body flex-fill px-2">
                        @for ($y = 1; $y < 11; $y++)
                        <div class="kanban__item bg-white d-flex rounded flex-column gap-y-3 mb-2 p-2">
                            <div class="kanbar__item--header d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                                    <span class="ml-2">Client Name</span>
                                </div>
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="">
                                    <span class="ml-2">Sadik Istiak</span>
                                </div>
                            </div>
                            <div class="kanbar__item--body d-flex gap-x-2">
                                <div>
                                    <img class="logo" src="/img/stacked-files.png" alt="">
                                </div>
                                <div class="d-inline-block text-truncate flex-fill">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique repellendus magnam ipsum nulla a, suscipit quam ut quasi, sequi iusto delectus nisi sint nobis, nemo maiores doloremque debitis harum saepe.</div>
                                <div class="p-1 d-flex align-items-center gap-x-1 bg-light rounded">
                                    <img class="logo" src="/img/clipboard.png" alt="">
                                    <div>1/2</div>
                                </div>
                            </div>
                            <div class="kanbar__item--footer">
                                <div class="d-flex gap-x-3 align-items-center justify-content-between">
                                    <div class="d-flex gap-x-3 align-items-center">
                                        <img class="rounded-circle avatar-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRqRyIiwYCq4s-fZi1zdmyfSuIPUvg9EyZ_Q&usqp=CAU" alt="">
                                        <img class="rounded-circle avatar-lg" src="https://www.w3schools.com/w3images/avatar2.png" alt="">
                                        <button class="avater-lg btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1"><small>12+</small></button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1">
                                            <img class="logo" src="/img/message-circle.svg" alt=""><small>15</small>
                                        </button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1" onclick="uploadAttackment('inconplate-list-{{$y}}')">
                                            <img class="logo" src="/img/paperclip.svg" alt=""><small id="inconplate-list-{{$y}}">0</small>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center gap-x-1">
                                        <img class="logo" src="/img/calendar.svg" alt=""><small>30-12-2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                {{-- todo --}}
                <div id="todo-list" class="d-flex flex-column kanban__list__item">
                    <div class="d-flex justify-content-between align-items-center kanban__list__item--header py-4 px-3">
                        <div class="d-flex align-items-center gap-x-1">
                            <div class="tag tag--blue"></div>
                            <h5 class="p-0 m-0">To Do</h5>
                        </div>
                        <div><span class="px-2 py-1 rounded fw-bold bg-white">0</span></div>
                    </div>
                    <div class="kanban__list__item--body flex-fill px-2">
                        @for ($y = 0; $y < 10; $y++)
                        <div class="kanban__item bg-white d-flex rounded flex-column gap-y-3 mb-2 p-2">
                            <div class="kanbar__item--header d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                                    <span class="ml-2">Client Name</span>
                                </div>
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="">
                                    <span class="ml-2">Sadik Istiak</span>
                                </div>
                            </div>
                            <div class="kanbar__item--body d-flex gap-x-2">
                                <div>
                                    <img class="logo" src="/img/stacked-files.png" alt="">
                                </div>
                                <div class="d-inline-block text-truncate flex-fill">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique repellendus magnam ipsum nulla a, suscipit quam ut quasi, sequi iusto delectus nisi sint nobis, nemo maiores doloremque debitis harum saepe.</div>
                                <div class="p-1 d-flex align-items-center gap-x-1 bg-light rounded">
                                    <img class="logo" src="/img/clipboard.png" alt="">
                                    <div>1/2</div>
                                </div>
                            </div>
                            <div class="kanbar__item--footer">
                                <div class="d-flex gap-x-3 align-items-center justify-content-between">
                                    <div class="d-flex gap-x-3 align-items-center">
                                        <img class="rounded-circle avatar-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRqRyIiwYCq4s-fZi1zdmyfSuIPUvg9EyZ_Q&usqp=CAU" alt="">
                                        <img class="rounded-circle avatar-lg" src="https://www.w3schools.com/w3images/avatar2.png" alt="">
                                        <button class="avater-lg btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1"><small>12+</small></button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1">
                                            <img class="logo" src="/img/message-circle.svg" alt=""><small>15</small>
                                        </button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1" onclick="uploadAttackment('todo-list-{{$y}}')">
                                            <img class="logo" src="/img/paperclip.svg" alt=""><small id="todo-list-{{$y}}">0</small>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center gap-x-1">
                                        <img class="logo" src="/img/calendar.svg" alt=""><small>30-12-2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                {{-- doing --}}
                <div id="doing-list" class="d-flex flex-column kanban__list__item">
                    <div class="d-flex justify-content-between align-items-center kanban__list__item--header py-4 px-3">
                        <div class="d-flex align-items-center gap-x-1">
                            <div class="tag tag--yellow"></div>
                            <h5 class="p-0 m-0">Doing</h5>
                        </div>
                        <div><span class="px-2 py-1 rounded fw-bold bg-white">0</span></div>
                    </div>
                    <div class="kanban__list__item--body flex-fill px-2">
                        @for ($y = 0; $y < 10; $y++)
                        <div class="kanban__item bg-white d-flex rounded flex-column gap-y-3 mb-2 p-2">
                            <div class="kanbar__item--header d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                                    <span class="ml-2">Client Name</span>
                                </div>
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="">
                                    <span class="ml-2">Sadik Istiak</span>
                                </div>
                            </div>
                            <div class="kanbar__item--body d-flex gap-x-2">
                                <div>
                                    <img class="logo" src="/img/stacked-files.png" alt="">
                                </div>
                                <div class="d-inline-block text-truncate flex-fill">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique repellendus magnam ipsum nulla a, suscipit quam ut quasi, sequi iusto delectus nisi sint nobis, nemo maiores doloremque debitis harum saepe.</div>
                                <div class="p-1 d-flex align-items-center gap-x-1 bg-light rounded">
                                    <img class="logo" src="/img/clipboard.png" alt="">
                                    <div>1/2</div>
                                </div>
                            </div>
                            <div class="kanbar__item--footer">
                                <div class="d-flex gap-x-3 align-items-center justify-content-between">
                                    <div class="d-flex gap-x-3 align-items-center">
                                        <img class="rounded-circle avatar-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRqRyIiwYCq4s-fZi1zdmyfSuIPUvg9EyZ_Q&usqp=CAU" alt="">
                                        <img class="rounded-circle avatar-lg" src="https://www.w3schools.com/w3images/avatar2.png" alt="">
                                        <button class="avater-lg btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1"><small>12+</small></button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1">
                                            <img class="logo" src="/img/message-circle.svg" alt=""><small>15</small>
                                        </button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1" onclick="uploadAttackment('doing-list-{{$y}}')">
                                            <img class="logo" src="/img/paperclip.svg" alt=""><small id="doing-list-{{$y}}">0</small>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center gap-x-1">
                                        <img class="logo" src="/img/calendar.svg" alt=""><small>30-12-2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                {{-- under review --}}
                <div id="under_review-list" class="d-flex flex-column kanban__list__item">
                    <div class="d-flex justify-content-between align-items-center kanban__list__item--header py-4 px-3">
                        <div class="d-flex align-items-center gap-x-1">
                            <h5 class="p-0 m-0">User  Review</h5>
                        </div>
                        <div><span class="px-2 py-1 rounded fw-bold bg-white">0</span></div>
                    </div>
                    <div class="kanban__list__item--body flex-fill px-2">
                        @for ($y = 0; $y < 10; $y++)
                        <div class="kanban__item bg-white d-flex rounded flex-column gap-y-3 mb-2 p-2">
                            <div class="kanbar__item--header d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                                    <span class="ml-2">Client Name</span>
                                </div>
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="">
                                    <span class="ml-2">Sadik Istiak</span>
                                </div>
                            </div>
                            <div class="kanbar__item--body d-flex gap-x-2">
                                <div>
                                    <img class="logo" src="/img/stacked-files.png" alt="">
                                </div>
                                <div class="d-inline-block text-truncate flex-fill">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique repellendus magnam ipsum nulla a, suscipit quam ut quasi, sequi iusto delectus nisi sint nobis, nemo maiores doloremque debitis harum saepe.</div>
                                <div class="p-1 d-flex align-items-center gap-x-1 bg-light rounded">
                                    <img class="logo" src="/img/clipboard.png" alt="">
                                    <div>1/2</div>
                                </div>
                            </div>
                            <div class="kanbar__item--footer">
                                <div class="d-flex gap-x-3 align-items-center justify-content-between">
                                    <div class="d-flex gap-x-3 align-items-center">
                                        <img class="rounded-circle avatar-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRqRyIiwYCq4s-fZi1zdmyfSuIPUvg9EyZ_Q&usqp=CAU" alt="">
                                        <img class="rounded-circle avatar-lg" src="https://www.w3schools.com/w3images/avatar2.png" alt="">
                                        <button class="avater-lg btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1"><small>12+</small></button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1">
                                            <img class="logo" src="/img/message-circle.svg" alt=""><small>15</small>
                                        </button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1" onclick="uploadAttackment('under_review-list-{{$y}}')">
                                            <img class="logo" src="/img/paperclip.svg" alt=""><small id="under_review-list-{{$y}}">0</small>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center gap-x-1">
                                        <img class="logo" src="/img/calendar.svg" alt=""><small>30-12-2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                {{-- Complated --}}
                <div id="complated-list" class="d-flex flex-column kanban__list__item">
                    <div class="d-flex justify-content-between align-items-center kanban__list__item--header py-4 px-3">
                        <div class="d-flex align-items-center gap-x-1">
                            <h5 class="p-0 m-0">Complate</h5>
                        </div>
                        <div><span class="px-2 py-1 rounded fw-bold bg-white">0</span></div>
                    </div>
                    <div class="kanban__list__item--body flex-fill px-2">
                        @for ($y = 0; $y < 10; $y++)
                        <div class="kanban__item bg-white d-flex rounded flex-column gap-y-3 mb-2 p-2">
                            <div class="kanbar__item--header d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                                    <span class="ml-2">Client Name</span>
                                </div>
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="">
                                    <span class="ml-2">Sadik Istiak</span>
                                </div>
                            </div>
                            <div class="kanbar__item--body d-flex gap-x-2">
                                <div>
                                    <img class="logo" src="/img/stacked-files.png" alt="">
                                </div>
                                <div class="d-inline-block text-truncate flex-fill">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique repellendus magnam ipsum nulla a, suscipit quam ut quasi, sequi iusto delectus nisi sint nobis, nemo maiores doloremque debitis harum saepe.</div>
                                <div class="p-1 d-flex align-items-center gap-x-1 bg-light rounded">
                                    <img class="logo" src="/img/clipboard.png" alt="">
                                    <div>1/2</div>
                                </div>
                            </div>
                            <div class="kanbar__item--footer">
                                <div class="d-flex gap-x-3 align-items-center justify-content-between">
                                    <div class="d-flex gap-x-3 align-items-center">
                                        <img class="rounded-circle avatar-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRqRyIiwYCq4s-fZi1zdmyfSuIPUvg9EyZ_Q&usqp=CAU" alt="">
                                        <img class="rounded-circle avatar-lg" src="https://www.w3schools.com/w3images/avatar2.png" alt="">
                                        <button class="avater-lg btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1"><small>12+</small></button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1">
                                            <img class="logo" src="/img/message-circle.svg" alt=""><small>15</small>
                                        </button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1" onclick="uploadAttackment('completed-list-{{$y}}')">
                                            <img class="logo" src="/img/paperclip.svg" alt=""><small id="completed-list-{{$y}}">0</small>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center gap-x-1">
                                        <img class="logo" src="/img/calendar.svg" alt=""><small>30-12-2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                {{-- overdue --}}
                <div id="overdue--list" class="d-flex flex-column kanban__list__item">
                    <div class="d-flex justify-content-between align-items-center kanban__list__item--header py-4 px-3">
                        <div class="d-flex align-items-center gap-x-1">
                            <h5 class="p-0 m-0">Overdue</h5>
                        </div>
                        <div><span class="px-2 py-1 rounded fw-bold bg-white">0</span></div>
                    </div>
                    <div class="kanban__list__item--body flex-fill px-2">
                        @for ($y = 0; $y < 10; $y++)
                        <div class="kanban__item bg-white d-flex rounded flex-column gap-y-3 mb-2 p-2">
                            <div class="kanbar__item--header d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                                    <span class="ml-2">Client Name</span>
                                </div>
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="">
                                    <span class="ml-2">Sadik Istiak</span>
                                </div>
                            </div>
                            <div class="kanbar__item--body d-flex gap-x-2">
                                <div>
                                    <img class="logo" src="/img/stacked-files.png" alt="">
                                </div>
                                <div class="d-inline-block text-truncate flex-fill">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique repellendus magnam ipsum nulla a, suscipit quam ut quasi, sequi iusto delectus nisi sint nobis, nemo maiores doloremque debitis harum saepe.</div>
                                <div class="p-1 d-flex align-items-center gap-x-1 bg-light rounded">
                                    <img class="logo" src="/img/clipboard.png" alt="">
                                    <div>1/2</div>
                                </div>
                            </div>
                            <div class="kanbar__item--footer">
                                <div class="d-flex gap-x-3 align-items-center justify-content-between">
                                    <div class="d-flex gap-x-3 align-items-center">
                                        <img class="rounded-circle avatar-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRqRyIiwYCq4s-fZi1zdmyfSuIPUvg9EyZ_Q&usqp=CAU" alt="">
                                        <img class="rounded-circle avatar-lg" src="https://www.w3schools.com/w3images/avatar2.png" alt="">
                                        <button class="avater-lg btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1"><small>12+</small></button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1">
                                            <img class="logo" src="/img/message-circle.svg" alt=""><small>15</small>
                                        </button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1" onclick="uploadAttackment('overdue-list-{{$y}}')">
                                            <img class="logo" src="/img/paperclip.svg" alt=""><small id="overdue-list-{{$y}}">0</small>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center gap-x-1">
                                        <img class="logo" src="/img/calendar.svg" alt=""><small>30-12-2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                {{-- done --}}
                <div id="done-list" class="d-flex flex-column kanban__list__item">
                    <div class="d-flex justify-content-between align-items-center kanban__list__item--header py-4 px-3">
                        <div class="d-flex align-items-center gap-x-1">
                            <h5 class="p-0 m-0">Done</h5>
                        </div>
                        <div><span class="px-2 py-1 rounded fw-bold bg-white">0</span></div>
                    </div>
                    <div class="kanban__list__item--body flex-fill px-2">
                        @for ($y = 0; $y < 10; $y++)
                        <div class="kanban__item bg-white d-flex rounded flex-column gap-y-3 mb-2 p-2">
                            <div class="kanbar__item--header d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                                    <span class="ml-2">Client Name</span>
                                </div>
                                <div class="d-flex align-items-center gap-x-2">
                                    <img class="rounded-circle avatar" src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="">
                                    <span class="ml-2">Sadik Istiak</span>
                                </div>
                            </div>
                            <div class="kanbar__item--body d-flex gap-x-2">
                                <div>
                                    <img class="logo" src="/img/stacked-files.png" alt="">
                                </div>
                                <div class="d-inline-block text-truncate flex-fill">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique repellendus magnam ipsum nulla a, suscipit quam ut quasi, sequi iusto delectus nisi sint nobis, nemo maiores doloremque debitis harum saepe.</div>
                                <div class="p-1 d-flex align-items-center gap-x-1 bg-light rounded">
                                    <img class="logo" src="/img/clipboard.png" alt="">
                                    <div>1/2</div>
                                </div>
                            </div>
                            <div class="kanbar__item--footer">
                                <div class="d-flex gap-x-3 align-items-center justify-content-between">
                                    <div class="d-flex gap-x-3 align-items-center">
                                        <img class="rounded-circle avatar-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRqRyIiwYCq4s-fZi1zdmyfSuIPUvg9EyZ_Q&usqp=CAU" alt="">
                                        <img class="rounded-circle avatar-lg" src="https://www.w3schools.com/w3images/avatar2.png" alt="">
                                        <button class="avater-lg btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1"><small>12+</small></button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1">
                                            <img class="logo" src="/img/message-circle.svg" alt=""><small>15</small>
                                        </button>
                                        <button class="btn btn-light rounded-pill p-1 d-flex jsutify-centent-center align-items-center fw-ligh gap-x-1" onclick="uploadAttackment('done-list-{{$y}}')">
                                            <img class="logo" src="/img/paperclip.svg" alt=""><small id="done-list-{{$y}}">0</small>
                                        </button>
                                    </div>
                                    <div class="d-flex align-items-center gap-x-1">
                                        <img class="logo" src="/img/calendar.svg" alt=""><small>30-12-2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="attachmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5">Add Attachments</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input id="fileInput" multiple class="form-control" type="file" name="files" onchange="loadFiles()">
                </form>
                <div id="fileShow" class="pt-2">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="submit()">Upload</button>
            </div>
        </div>
        </div>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>