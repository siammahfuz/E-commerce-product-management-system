public function categories()
{
    return $this->belongsToMany(Category::class);
}
