<?php namespace WebEd\Base\Caching\Repositories\Traits;

trait EloquentUseSoftDeletesCache
{
    /**
     * @param bool $bool
     * @return $this
     */
    public function withTrashed($bool = true)
    {
        call_user_func_array([$this->repository, __FUNCTION__], func_get_args());
        return $this;
    }

    /**
     * @param bool $bool
     * @return $this
     */
    public function onlyTrashed($bool = true)
    {
        call_user_func_array([$this->repository, __FUNCTION__], func_get_args());
        return $this;
    }

    /**
     * @param \WebEd\Base\Core\Models\Contracts\BaseModelContract|int|array|null $id
     * @return array
     */
    public function restore($id = null)
    {
        return $this->afterUpdate(__FUNCTION__, func_get_args());
    }

    /**
     * @return bool|null
     */
    public function forceDelete()
    {
        return $this->afterUpdate(__FUNCTION__, func_get_args());
    }
}
