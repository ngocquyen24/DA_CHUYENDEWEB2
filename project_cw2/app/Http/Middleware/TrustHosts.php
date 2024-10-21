<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<int, string|null>
=======
     * @return array
>>>>>>> origin/them_slide
=======
     * @return array<int, string|null>
>>>>>>> Login_Register
     */
    public function hosts()
=======
     * @return array<int, string|null>
     */
    public function hosts(): array
>>>>>>> danhmuc_list
=======
     * @return array<int, string|null>
     */
    public function hosts(): array
>>>>>>> danhmuc_list
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
