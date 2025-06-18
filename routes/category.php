public function products()
{
    return $this->belongsToMany(Product::class);
}
