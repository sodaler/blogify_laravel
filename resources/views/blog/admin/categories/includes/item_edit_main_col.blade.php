@php
 /** @var \App\Models\BlogCategory $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Main data</a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane active" id="maindata" role="tabpanel">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" value="{{ old('title', $item->title) }}"
                                       id="title"
                                       type="text"
                                       class="form-control"
                                       minlength="3"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input name="slug" value="{{ old('slug', $item->slug) }}"
                                       id="slug"
                                       type="text"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="parent_id">Parent</label>
                                <select name="parent_id" value="{{ $item->parent_id }}"
                                        id="parent_id"
                                        type="text"
                                        class="form-control"
                                        required>
                                    @foreach($categoryList as $categoryOption)
                                        <option value="{{ $categoryOption->id }}"
                                                @if($categoryOption->id === $item->parent_id) selected @endif>
                                                {{ $categoryOption->id_title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <textarea name="description"
                                          id="description"
                                          class="form-control"
                                          rows="3">{{ old('description', $item->description) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
