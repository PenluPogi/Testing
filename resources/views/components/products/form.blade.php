@csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name',$product->name ?? '') }}">

        <label for="Description">Description</label>
        <textarea name="description" id="description">{{ old('description',$product->description ?? '') }}</textarea>

        <label for="Size">Size</label>
        <input type="text" name="size" id="size" value="{{ old('size',$product->size ?? '') }}">

        <button>Save</button>