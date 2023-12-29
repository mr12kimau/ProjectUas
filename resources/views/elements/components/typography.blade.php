<x-app-layout>
    <div class="space-y-8">
        <div>
          <x-breadcrumb :page-title="$pageTitle" :breadcrumb-items="$breadcrumbItems" />
        </div>

        <div class="grid md:grid-cols-2 gap-7">
            <!-- HTML Headings Default -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full ">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">HTML headings Default</div>
                  </div>
                </header>
                <div class="card-text h-full">
                  <p class="text-sm font-Inter text-slate-600 dark:text-slate-300"> All HTML headings, are available. .h1 through .h7 classes are also available, for when you want to match the font styling of a heading. </p>
                  <div class="bg-slate-100 dark:bg-slate-700 text-xs text-slate-600 dark:text-slate-300 flex justify-between py-3 px-6
                                      items-center -mx-6 mt-6 mb-6 font-semibold">
                    <span>PREVIEW</span>
                    <span>FONT SIZE</span>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h1>Heading 1</h1>
                    <span class="text-sm text-slate-600 dark:text-slate-300">60px</span>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h2>Heading 2</h2>
                    <span class="text-sm text-slate-600 dark:text-slate-300">48px</span>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h3>Heading 3</h3>
                    <span class="text-sm text-slate-600 dark:text-slate-300">36px</span>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h4>Heading 4</h4>
                    <span class="text-sm text-slate-600 dark:text-slate-300">30px</span>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h5>Heading 5</h5>
                    <span class="text-sm text-slate-600 dark:text-slate-300">24px</span>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h6>Heading 6</h6>
                    <span class="text-sm text-slate-600 dark:text-slate-300">20px</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Light / Bold Headings -->
            <div class="card ">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Light / Bold Headings</div>
                  </div>
                </header>
                <div class="card-text h-full">
                  <p class="text-sm font-Inter text-slate-600 dark:text-slate-300"> All HTML headings are available with light and bold font-weight. Use .font-weight-normal for light heading and. </p>
                  <div class="bg-slate-100 dark:bg-slate-700 text-xs text-slate-600 dark:text-slate-300 flex justify-between py-3 px-6
                                      items-center -mx-6 mt-6 mb-6 font-semibold">
                    <span>LIGHT HEADINGS</span>
                    <span>BOLD HEADINGS</span>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h1 class="font-light">Heading</h1>
                    <h1>Heading</h1>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h2 class="font-light">Heading 2</h2>
                    <h2>Heading 2</h2>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h3 class="font-light">Heading 3</h3>
                    <h3>Heading 3</h3>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h4 class="font-light">Heading 4</h4>
                    <h4>Heading 4</h4>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h5 class="font-light">Heading 5</h5>
                    <h5>Heading 5</h5>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h6 class="font-light">Heading 6</h6>
                    <h6>Heading 6</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- Texts -->
            <div class="card md:col-span-2 ">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Texts</div>
                  </div>
                </header>
                <div class="card-text h-full">
                  <div class="-mx-6">
                    <table class="w-full border-collapse border-none text-left">
                      <tbody>
                        <tr>
                          <th class="text-xs font-semibold bg-slate-100 dark:bg-slate-700">
                            <span class="px-6 py-5 block text-slate-600 dark:text-slate-300">Type</span>
                          </th>
                          <th class="text-xs font-semibold bg-slate-100 dark:bg-slate-700">
                            <span class="px-6 py-5 block text-slate-600 dark:text-slate-300">Class</span>
                          </th>
                          <th class="text-xs font-semibold bg-slate-100 dark:bg-slate-700">
                            <span class="px-6 py-5 block text-slate-600 dark:text-slate-300">Text</span>
                          </th>
                        </tr>
                        <tr class="border-b border-slate-100 dark:border-slate-700">
                          <td class="text-slate-900 dark:text-slate-300 text-left px-6 py-4 text-lg font-medium">Title</td>
                          <td class="text-slate-900 dark:text-slate-300 text-lg font-medium text-left t px-6 py-4">text-lg</td>
                          <td class="text-slate-900 dark:text-slate-300 text-lg font-medium text-left px-6 py-4">
                            <p>Cupcake ipsum dolor sit amet fruitcake donut chocolate.</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">font-size: 18px / line-height: 28px / font-weight: 500</p>
                          </td>
                        </tr>
                        <tr class="border-b border-slate-100 dark:border-slate-700">
                          <td class="text-slate-700 dark:text-slate-300 text-left px-6 py-4 text-base font-normal">Sub Title</td>
                          <td class="text-slate-700 dark:text-slate-300 text-base font-normaltext-left t px-6 py-4">text-base</td>
                          <td class="text-slate-700 dark:text-slate-300 text-base font-normal text-left px-6 py-4">
                            <p>Cupcake ipsum dolor sit amet fruitcake donut chocolate.</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">font-size: 16px / line-height: 24px / font-weight: 400</p>
                          </td>
                        </tr>
                        <tr class="border-b border-slate-100 dark:border-slate-700">
                          <td class="text-slate-600 dark:text-slate-300 text-left px-6 py-4 text-sm font-normal">Body Text</td>
                          <td class="text-slate-600 dark:text-slate-300 text-base font-sm font-normal text-left t px-6 py-4">text-sm</td>
                          <td class="text-slate-600 dark:text-slate-300 text-sm font-normal text-left px-6 py-4">
                            <p>Cupcake ipsum dolor sit amet fruitcake donut chocolate.</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">font-size: 14px / line-height: 20px / font-weight: 400</p>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-slate-600 dark:text-slate-300 text-left px-6 py-4 text-xs font-normal">Small Text</td>
                          <td class="text-slate-600 dark:text-slate-300 text-base font-xs font-normal text-left t px-6 py-4">text-xs</td>
                          <td class="text-slate-600 dark:text-slate-300 text-xs font-normal text-left px-6 py-4">
                            <p>Cupcake ipsum dolor sit amet fruitcake donut chocolate.</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">font-size: 12px / line-height: 18px / font-weight: 400</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Customizing headings Default -->
            <div class="card ">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5  -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Customizing headings Default</div>
                  </div>
                </header>
                <div class="card-text h-full">
                  <div class="text-sm text-slate-600 dark:text-slate-300 mb-6"> Use the included utility classes to recreate the small secondary-500 heading text. </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h1>Display heading</h1>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h2>Display heading</h2>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h3>Display heading</h3>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h4>Display heading</h4>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h5>Display heading</h5>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h6>Display heading</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- Heading colors -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full ">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5  -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Heading colors</div>
                  </div>
                </header>
                <div class="card-text h-full">
                  <div class="text-sm text-slate-600 dark:text-slate-300 mb-6"> Use the included utility classes to recreate the small secondary-500 heading text. </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h1 class="text-primary-500">Display heading</h1>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h2 class="text-secondary-500">Display heading</h2>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h3 class="text-success-500">Display heading</h3>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h4 class="text-danger-500">Display heading</h4>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h5 class="text-warning-500">Display heading</h5>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h6 class="text-info-500">Display heading</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- Display Heading -->
            <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full ">
              <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5  -mx-6 px-6">
                  <div class="flex-1">
                    <div class="card-title text-slate-900 dark:text-white">Display Headings</div>
                  </div>
                </header>
                <div class="card-text h-full">
                  <div class="text-sm text-slate-600 dark:text-slate-300 mb-6"> Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style. </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h1 class="display-1">Display 1</h1>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h2 class="display-2">Display 2</h2>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h3 class="display-3">Display 3</h3>
                  </div>
                  <div class="md:flex justify-between items-center mb-6">
                    <h4 class="display-4">Display 4</h4>
                  </div>
                </div>
              </div>
            </div>
            <!-- Inline Text Elements -->
            <div class="space-y-5">
              <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full ">
                <div class="card-body flex flex-col p-6">
                  <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5  -mx-6 px-6">
                    <div class="flex-1">
                      <div class="card-title text-slate-900 dark:text-white">Inline Text Elements</div>
                    </div>
                  </header>
                  <div class="card-text h-full">
                    <div class="space-y-4">
                      <p class="text-sm font-light text-slate-600 dark:text-slate-300"> Styling for common inline HTML5 elements. </p>
                      <p class="text-sm font-light text-slate-900 dark:text-slate-300">
                        <del>This line of text is meant to be treated as deleted text.</del>
                      </p>
                      <p class="text-sm font-light text-slate-900 dark:text-slate-300">
                        <a aria-current="page" href="/app/typography#" class="router-link-active router-link-exact-active underline">This line of text is meant to be treated as an addition to the document.</a>
                      </p>
                      <p class="text-sm font-light text-slate-900 dark:text-slate-300">
                        <del>This line of text is meant to be treated as deleted text.</del>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Text Colors -->
            <div class="lg:col-span-2 col-span-1">
              <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full ">
                <div class="card-body flex flex-col p-6">
                  <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5  -mx-6 px-6">
                    <div class="flex-1">
                      <div class="card-title text-slate-900 dark:text-white">Text Color</div>
                    </div>
                  </header>
                  <div class="card-text h-full">
                    <div class="space-y-4">
                      <p class="text-sm font-light text-slate-600 dark:text-slate-300"> Styling for common inline HTML5 elements. </p>
                      <p class="text-sm font-light text-primary-500"> Styling for common inline HTML5 elements. </p>
                      <p class="text-sm font-light text-success-500"> Styling for common inline HTML5 elements. </p>
                      <p class="text-sm font-light text-warning-500"> This is warning-500 text You can archive this adding .text-warning-500 class </p>
                      <p class="text-sm font-light text-danger-500"> This is danger-500 text You can archive this adding .text-danger-500 class </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Inline Text Elements -->
            <div class="lg:col-span-2 col-span-1">
              <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full ">
                <div class="card-body flex flex-col p-6">
                  <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5  -mx-6 px-6">
                    <div class="flex-1">
                      <div class="card-title text-slate-900 dark:text-white">Listing Typography</div>
                    </div>
                  </header>
                  <div class="card-text h-full">
                    <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
                      <div>
                        <span class="block text-slate-900 dark:text-slate-300 font-medium leading-8 text-base mb-6">Unorder list.</span>
                        <ul class="space-y-3 p-6 rounded-md bg-slate-50 dark:bg-slate-700">
                          <li class="text-sm text-slate-900 dark:text-slate-300"> Lorem ipsum dolor sit amet. </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300"> Lorem ipsum dolor sit amet. </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300"> Lorem ipsum dolor sit amet. </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300"> Lorem ipsum dolor sit amet. </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300"> Lorem ipsum dolor sit amet. </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300"> Lorem ipsum dolor sit amet. </li>
                        </ul>
                      </div>
                      <div>
                        <span class="block text-slate-900 dark:text-slate-300 font-medium leading-8 text-base mb-6">list-decimal</span>
                        <ol class="space-y-3 p-6 rounded-md bg-slate-50 dark:bg-slate-700 list-by-numbering custom-list">
                          <li class="text-sm text-slate-900 dark:text-slate-300">
                            <span>Lorem ipsum dolor sit amet.</span>
                            <ol class="list-by-numbering">
                              <li>Lorem ipsum dolor sit amet.</li>
                            </ol>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300">
                            <span> Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300">
                            <span> Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300">
                            <span> Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300">
                            <span> Lorem ipsum dolor sit amet.</span>
                          </li>
                        </ol>
                      </div>
                      <div>
                        <span class="block text-slate-900 dark:text-slate-300 font-medium leading-8 text-base mb-6">Dash list</span>
                        <ul class="space-y-3 p-6 rounded-md bg-slate-50 dark:bg-slate-700 custom-list">
                          <li class="text-sm text-slate-900 dark:text-slate-300">
                            <span class="font-medium"> Lorem ipsum dolor sit amet.</span>
                            <ul class="list-by-slash">
                              <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300">
                            <span class="font-medium"> Lorem ipsum dolor sit amet.</span>
                            <ul class="list-by-slash">
                              <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300">
                            <span class="font-medium"> Lorem ipsum dolor sit amet.</span>
                            <ul class="list-by-slash">
                              <li>Lorem ipsum dolor sit amet.</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div>
                        <span class="block text-slate-900 dark:text-slate-300 font-medium leading-8 text-base mb-6">Icon List 1</span>
                        <ul class="space-y-3 p-6 rounded-md bg-slate-50 dark:bg-slate-700">
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-double-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-double-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-double-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-double-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-double-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-double-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                        </ul>
                      </div>
                      <div>
                        <span class="block text-slate-900 dark:text-slate-300 font-medium leading-8 text-base mb-6">Icon List 2</span>
                        <ul class="space-y-3 p-6 rounded-md bg-slate-50 dark:bg-slate-700">
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <iconify-icon class="relative top-[1px]" icon="heroicons-outline:chevron-right"></iconify-icon>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                        </ul>
                      </div>
                      <div>
                        <span class="block text-slate-900 dark:text-slate-300 font-medium leading-8 text-base mb-6">Icon List 3</span>
                        <ul class="space-y-3 p-6 rounded-md bg-slate-50 dark:bg-slate-700">
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <span class="h-[6px] w-[6px] bg-slate-900 dark:bg-slate-400 rounded-full inline-block"></span>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <span class="h-[6px] w-[6px] bg-slate-900 dark:bg-slate-400 rounded-full inline-block"></span>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <span class="h-[6px] w-[6px] bg-slate-900 dark:bg-slate-400 rounded-full inline-block"></span>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <span class="h-[6px] w-[6px] bg-slate-900 dark:bg-slate-400 rounded-full inline-block"></span>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <span class="h-[6px] w-[6px] bg-slate-900 dark:bg-slate-400 rounded-full inline-block"></span>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                          <li class="text-sm text-slate-900 dark:text-slate-300 flex space-x-2 items-center rtl:space-x-reverse">
                            <span class="h-[6px] w-[6px] bg-slate-900 dark:bg-slate-400 rounded-full inline-block"></span>
                            <span>Lorem ipsum dolor sit amet.</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="lg:col-span-2">
              <div class="card rounded-md bg-white dark:bg-slate-800 lg:h-full ">
                <div class="card-body flex flex-col p-6">
                  <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5  -mx-6 px-6">
                    <div class="flex-1">
                      <div class="card-title text-slate-900 dark:text-white">Blockquotes</div>
                    </div>
                  </header>
                  <div class="card-text h-full">
                    <div class="space-y-5">
                      <blockquote class="text-slate-900 dark:text-slate-300"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus laudantium omnis fugit ducimus nulla libero temporibus corrupti non voluptatem harum? <span class="text-sm text-slate-400 block mt-3">Dashcode Admin Template</span>
                      </blockquote>
                      <blockquote class="border-primary-500 text-right text-slate-900 dark:text-slate-300"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus laudantium omnis fugit ducimus nulla libero temporibus corrupti non voluptatem harum? <span class="text-sm text-slate-400 block mt-3">Dashcode Admin Template</span>
                      </blockquote>
                      <blockquote class="border-success-500 text-center text-slate-900 dark:text-slate-300"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus laudantium omnis fugit ducimus nulla libero temporibus corrupti non voluptatem harum? <span class="text-sm text-slate-400 block mt-3">Dashcode Admin Template</span>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
