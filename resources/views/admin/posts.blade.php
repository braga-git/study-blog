<x-layout>
    <header class="mb-8">
        <h1 class="text-2xl font-semibold">Manage post</h1>
    </header>

    <button onclick="location.href='/posts/create'"
        class="w-full text-lg bg-gray-50 text-gray-700 border border-gray-200 rounded py-4 hover:bg-gray-100 mb-8">
        <i class="fa-solid fa-file-lines mr-2"></i> Create post
    </button>

    <x-search :action="'/admin/posts'" />

    @php
        foreach ($posts as $post) {
            $post['status'] = ucfirst(trans($post['status']));
            $post['last modified on'] = $post['updated_at']->format('d/m/Y, H:i');
        }
    @endphp

    @unless ($posts->isEmpty())
        <x-table :tableHead="['id', 'title', 'status', 'last modified on']" :tableData="$posts" :editRouteAndParam="'post.edit'" :deleteRouteAndParam="'post.destroy'" />
    @else
        <tr>
            <td>
                <p>No posts found!</p>
            </td>
        </tr>
    @endunless
    </table>
    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</x-layout>
