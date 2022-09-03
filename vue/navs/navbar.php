<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search for projects"
                  aria-label="Search"
                />
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Theme toggler -->
              <li class="flex">
                <button
                  class="rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleTheme"
                  aria-label="Toggle color mode"
                >
                  <template x-if="!dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                      ></path>
                    </svg>
                  </template>
                  <template x-if="dark">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </template>
                </button>
              </li>
              <!-- Notifications menu -->
              <li class="relative">
                <button
                  class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  aria-label="Notifications"
                  aria-haspopup="true"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                    ></path>
                  </svg>
                  <!-- Notification badge -->
                  <span
                    aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                  ></span>
                </button>
                <template x-if="isNotificationsMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeNotificationsMenu"
                    @keydown.escape="closeNotificationsMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Messages</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          13
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Sales</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          2
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Alerts</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
              <!-- Profile menu -->
              <li class="relative">
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                  <img
                    class="object-cover w-8 h-8 rounded-full"
                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITERUSERMWFhAXFhIVFRcXEBcVFRYVGBUWGBgVFRgYHSggGBonHRUVITEhJiktLi4uGB8zODMsNygtLisBCgoKDg0OGxAQGy8lICUtLS0tLS0tLS0tLS0tLS0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAMEBBQMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABQYEBwIDCAH/xABLEAABAwIDBAYGBQgIBQUAAAABAAIDBBESITEFBkFRBxNhcYGRIlKSobHBFDJyotE1c4KTo7LC4SMkM0NT0vDxFTZUYmMWFzRCRP/EABoBAQACAwEAAAAAAAAAAAAAAAABAgMEBQb/xAAyEQACAQIEAwYFBAMBAAAAAAAAAQIDEQQSITEFQVEiYXGBwfAUMpGhsRMVUuFC0fEj/9oADAMBAAIRAxEAPwDeKIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAvhX1a96ZK+SOkZHGSGyyFshGV2NYTgvyJtfmAQiVzJSpupNQXMsj98KAOwGrhxA2P9IC0HkXD0R5qajkDgC0gtIuCDcEcwV5VaTqCbBTWyt666nj6uGpe1nBtmOA+ziacPhZXcTpVOF6diWveelEWkdx9+K99bDBJKZo5H4XNc1twLElzXNAIta/KwK3cqtWOfXoSoyyyCIigwhERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAFg7Uo4ZGf00bJGtOMB7A8BwBsQDlfMrOXRVf2b/ALLvgoexMd0QUe0YzcRtaWg2sCLDsIAyURtbd2grGnHG2OQ6SxhrXX5lwyf3OXOlZI1z8bw5rnksAbbCzCPRPM3Bz7QsMyGnpXvqCwvDXl5Y3C1xJIaAOZGFvetJYqotW7nTWGhF3jdPqmat2zsSooasRBzhMC0wvjJaX4jZjmWzBJuLc7jPj6PosfVs6y3WYW47aYrDFbxuqfubsjrGU9RVMxzxRkRufcubjsQO0hoAucx4lXdbkamdKVjXxlVzajK11u1z9/m4REVjTCIiAIiIAiIgCIofePazqeIPazES7DnoMibm3cqTmoRcpbIvTpyqTUI7slJJA0FziA0Zkk2A7yUikDgC0gg5gg3BHMFahq9oyyC0kj3Am9i8kX1004Lpgmc12Jji1wtm1xacje1xwvwXN/c1f5dPHU7S4G7az18NPzf7G6EVe3T2u6ojcHg44yA51gGuvci1uNtfDmrCulTqKpBTjszjVaUqU3CW6CIiuYwiIgCIiAIiIAiIgCIiAIiIAvhC+rGlqOXmpSbIZqvb8U9LK9tRNVkZmmdEGFj28Gy30eMgSb31tpf5u3sSs2hIx9Y4iljc1xaWhpkPBoYAMjxceBNtctjz2kIBF7HUjLjf3rtpxgybkO4LXeC7SbenQ2/jOxbn15fTckkXRDNfI6rvWw01uaoREUAIiIAiIgCIiALXO/VQTU4bENaxoFz6JvclwHjb9FbGUNtvZrpHNcyxIsCDyzz961cZSlUpZUbvD68aNZSl0ZSG7HYI2PdjJNiQMItccS4iw8V31WyYmMGly4Nu6XBcuOQGRBcTYAW4qRrqJssT4JQcLgWPAJabd4zC+1NGySwkaHBrmSNvwew3a4doNlz1Sp22OtLEVW32ia3W2V9Hjd6WLrHY9LWFgGt77DVTqxtntIiYDrYLJXWpRUYJLocGtNzqSlJ3dwiL4SshiPqL4CvqAIiIAiIgCIiAIiIAiIgOuY2aVHudn3C/+vIrt2jKRhANr3WGHkh/gPd/NZ6cezcxzZ3QtIA7h58VyuQM9bFch/tmuuU+gb5ZFW3YOwFSKhBObKVpHEsaTrYLHVi0TF3O5ERYi4REQBERAEREAXwrh1jeY81Tt6tpF7zC0+gy2Kx+s4558wMvFauMxUcNSdSSv0XVmxhsO69TIvN9ESG26mE2LHtMtwCGuvcWzvbisKhmiDwZfRZ4kE8rDQa+SgY2X+XMdy54STcuJtpe3yXnXxjNeTjryXLzO7HBxhDJmfjz8jYtLUskF2ODh2EG3fyWQtaw1D4nh8Zs73HsI4hXzZO0GzRh4yOjhyPJdjh/Eo4q8WrSXLquq9TkYvBOhaSd4szlE7WqbOaAcwHHuJFgfeSpW6rD4jJI7BndxI7r6rdxEmo2XMxYaClJuWyJ+ie0sAYcgAPdx7VkrDawRRWGoHmf91zgmJ1+CyJ2snuYZK92tjJREVygRdFLUskYHsN2nQ2I+K70AVC3xralm06COKZzIpCMbABZ2GVmLFzu11uyyvq1JvJX1M20OsZA7DTvcyE9S5wJY67nk20c5o04ALBiKqpRzNX8C9OrGnLNJXVn900vubbRYmzKoywxyFpYXsa4tOrSRctN+Sy1mTvqUCIikEJvGfqD7X8KiGOVg2rQmUDCRiF9dCD/ALKHds941tqBr22WlVoVJ1HlR0qFenGklJ7f7O2GvIFte2/xXVVVL35ZAchfPvWVDs4AXObuV/muNRRWBLT4FZpUMRktmv3f3YxRr4dTzKPn/V/QwGg8dFaKH+yZ9lvwULS7Pe8A5Adpz9yn4o8IAGgAHkqUKcoSeZWGLqwnFKLudiIi2jSCIiAIiIAqx0jwF+zakAkWa15sf/qx7XuB7CGkWVnWJtKl62GSI6Pjez2mkfNRJXViYuzuebWRiwsB5LYdJCGMa0aAAeWS15SPIIy9IEGx5jgtm1lO6KN8jrFjAXG2thyC8pxCjUqKORXPRYKcYqTk+h2xRmwyXIMPI+S5UlR6Dbjgu36TyBXFNlylfYxqiF2G9shmewaXPZchZ269SWTXv/RkWfy7PI+66kN3bulcHAYSxwII1zGt1mbR2WI/TjFmcWgfV7R2LtcOwTcY4lPZvTw9Opp18VHWhNbrf3zMza9XYYGnM693812bGp8LMR1d8OCiKOHrHhvDj3DVS219r09MwPqJWxMvhGI6nk0DM5cl6OlecnN+Ry6y/TiqUd3v6HDeTZf0mlmp8WEyMc0Otex4EjiL2yVM3D3Bmo6jr5pWOwh7WtYXHN2RJLgMrXy/BTx6RNl/9U32JP8AKuEfSHszjVN1J+pJ/lWxbUinPEU6cqcU7S30Jrbu1W08RkIu6+Fjb/Wd+Gp8FQpK+Wc45Xk30bezGjsbp46rC3t3zpqmRojlHVx4gDZ1nE29LTLQLDj2/TAAdc3Ieq/8Ft0lFK73NOVGs3pF/Rk/R1LmOBa4jnY28VcNh7VMhMUn9q0XB0D287c+a1j/AOoab/Gb7L/wUhT7300ckcomaS3UYXgkWI1t2qZpSXeI0ay/wf0ZthQVPJaV4t/eO+aw29IGzbC9S0HiMEmXZ9Va3qt75xUzGOoPUmaV0ZDQRgLiWWu2+llzMTJxSaTfgrmxGFSKfYbv3G7o9Auapext/KEU8Qnqm9cI2dZdjycdhivZtr3U7sfeKlqsQp5myFubgLhwHPCQDbtWdPQxypzSzOLXkS6IikoFF1H8Q+N1KLUtb0lGKpmhkhJZFNKxrmOGIhj3NF2utnlrdZKbVy0aM6t8ivY2Pjyvn5Z+S4VH1T3KjN6UaQjNszTy6lpPueQo+v6UorHq4ZnnhjLI2+4uPuWZWT1ZPwtd6ZGbT2X/AGfiVmKG3SrDNRQTOADpGB5A0BdwF1MrXm7ybKWa0YREVQEREAREQBERAectr04h2jNG7JrKl3hGZMQ+4Qtp19IJ4HRlxDXttiFjrncc1l7+7Ap5KeWoMLDUNDD1mAYy1rm3BOpGG67dm0EEdAJIo2sPUY8rgYgy5NtL3BWlPCvWSZu08VFdloh/o8kbQL3aOI/BdXXO5rHod6I3gXc09zsLvZcpGJ8M31T6XZkfLivNVcBGT/8AN2f8ZXT8r6+9ztRnzaTXVWZkbtyf1hnaHj7pPyV2VAkkFKRUG7o4zieABiw6GwJAOqkIukjZ51e9v2oHn90Fd3g1KpToyhNbS9F63ORxJxdRNPl6stMVOxt8LQL62FlpPpwrMVbFFfKOBp7nSPdf3NYtns342cf/ANTB9oOZ+8AtG9IW0W1G0Z5Y3h8RLGsc1wc0tbG1t2kZEXBPiutFWKYBZqt+i/orqIiudk7otFzXCLRcyrIyrYIvq+IAu2HRda5wqSVucZdVZejWs6vaUBvYOc5h7Q9jgB7WHyVbm1Xfsqq6qeKX/Dkik8GvDj8FDKVY5oyj1T/B6kREWE8sF5f29JiqZ3etPM7zkcfmvTr3WBPLNeVpH4iXcyT5m6tHc6nC12pPw+5n0NNip6mS31OoHdjeR/CVGO0Kumx6AnYddNbMzUzR3RujJP7U+Spb9CrI6VOWZz7n6I9G9Hf5MpPzTfiVY1W+jr8l0n5ofEqyLGecqfO/F/kIiIUCIiAIiIAiIgMXaVN1kMkfrse32mkfNQG6P9PswM4lksfdixW9zgvvSDU1UdGXUePrscYPVx43ht87NsezgtR7N23tNmKOnfOLOJc1kGIh2hJGAkZiyxTrKHZs/IvGk5a3IlhLLteCHAlrgdWkHMHtuLLvpasxuD43FrxoRkf5jsXdW0tbM8ySwTukd9Z30R4JPM4WC57Viy7NqGgudBM1o1LqeQAd5LbBT8arWcX78yfh2nui502/DSwCVh6zQltsJyOeoIzyt237FUamZrnucMg5znAXGVze2QA8gFjGllwh/VyYCbB3VOwk55B1rE5HyKy2bIqCAfo85BGRFPJY34j0VihXpU3eMHqZZxqVElKS0MKq4BQzipSqcRe+RAIz1uOaiit5mzwyOkpeCPi+r4EKg6h3x6Bcikei+OVkZORyXzivq48UJZ9K7IF1lc4NUJW59n4LgQuyfRdakcz03u3V9bSU8vrwxOPeWC/vupNVDoqqsezIb6sMsZ7myOw/dLVb1gPLVY5Jyj0bMPa8mGCV3qxyO8mkry43gvS2+EuGgq3DUU89u/q3LzRJxV4HU4WuzLxXqbl2Vsq27Tm29J8E0/fcmRv3Q3yWm3L0fTQYdlNZyow39hZecCkGX4fNyzt9b/X/AIei+jr8l0n5ofEqyKt9HX5LpPzTfiVZFQ5FT534sIiIUCIiAIiIAiIgCo+4MQ+k1j+Jkd75pT8leFTejkXbUP8AWk+bj/ErLZlXui5KA35/+BN2iMecjAp9V3f4/wBRk7XQj9qz8FEdyXsQlVRD/g8WWTHNk9qUg+55Vs3edelh7I2N9kYfksAUuLZYj4mmFvtdXce9dm5k2KkZ2F4+8T81Zu68yq0Zo3e/Z7mVlUwD+/lIz4PfjHucFwp90HvpBUtkFzMYcGHIER48Rdfw0Vl6TabBtKQ/4jIpPcY/jGpPdVmLZFRzZUtf92IH3XV+jNiniqlKOWHia+2jufWU7BJPCWREhofjY4EuBIthcTmByWHS7HllkbFC3FI42a3E0XNibXJA4cVvvbdCarZDmAXf1DXMHOSMBzR4llvFac3eqcFVTyA5CaF36ONt/ddVWxmePq3VreFvbJ3YPRVVygmoc2naNAbSvPg11gO837Fi7X6Ma+OTDEwTR8Hsexng5r3Cx8x2rfaKuZl/3Cte+lulvbPOs+50zKuKikcwTyMY7IksaXl9mk2z+pmRz4rKpujTaLpcDoWsbfOQysLAOYwkuPdbyVw3g/5ip/sU/wC9OtoLHCpJuSfJ+iLyx9VJbarp3mldsdEtRHHip5Wzu4sw9W79EucQfEhY+wOi2slJNRhp2Dnhke7uax1gO8+C3kiyZmY/3Cta2l+tva+xorbnRnXRutC0VDDo5rmsI7HNe4W8CVn0XRDO6LFLOyOS2UYYXgdjngjPuB8VuZEzMl8RrNcvp7RSejHY9RSQzQVDMNpcbHB7XNcHMaCWkG+reIGquyIoZqVJucnJ8ytdI0uHZlUecYb7T2t/iXnObQrf/Sy+2y5hzdCP2rD8lovZcOOeFnryxM9p7R81K2Z1uHdmjKXf+Ej0tUQ2pnMHCFzfJll5fGn+uS9V1Quxw5td8F5UZoPD4KYMpwt6T8vU9G9Hn5LpPzLfmrGq70e/kyk/MsViVDmVPnfiwiIhQIiIAiIgCIiAKo9Gbf6mXetIT9xn81aKl1mOPJrj5AqA6PY7UEXaXn7xHyUrZkPdFlVX6RHf1Pvki/ev8laFVekIXp4m+tURj7r/AMFMd0RLZlipIrRMbwDGt+6Aq/uH6MUsR1jlc3yAb8WFWcKt7vjBW1kfNzZB+kMR970WzJe6K30l7BnmqI5WR44xGGZOaLOxPJGoOhHYuO5GzXfR6xgdGWujLcDZg9zZMLrFwaSBwF739HsWX0xVskVLAY5HMcagD0XFpLepmJvbhey1vu1vJJSy44/rHJwPpdYCbkO4kk8b5KYqTXcRJxXLU3ZudLio4+Yxj7xI9xC1HLupPE53XRsjsc3vlY1gJ0ORsPBbQ3OvFCI3gXc4uFjcNuAMPbpqtZdJde//AIjPH1jnRAwXjxuwA9VG62EHnY+KmUZKVkISg1d6m49ghwpoQ57ZHCOMF7Xl7X+iLODj9a4zvxUktP7gb5SsIpy0OisXWJw9WMrkEC1iT9W3irc3pK2dfCZHYv8Atike3wcG2KpU7GrehMLz0SIHeD/mKn+xT/vTraC0ztjeGnk2xDVscTTsbCHO6twILTLf0SLn67VemdIezj/euHaYJMu/0VrQqwTldrf0RsThK0dOXqy2IuilqWSMbJG4OjcLtcDcEcwV3rYMAREQBEVc3j3vp6N7Y5Q9z3NxWY0GzbkAm5GpB8lEpKKuyUm3ZEL0zPts4D1p4x5Ne7+Faq3Cp+s2nSM/8uP9W10n8KmukDfF1fhhYwx07XYxisXudYgOdbIWBIAB45nS3Loiha3aTScyYpg3LR3om47cIePErFHEwbyrmdKlU/Sw8oNa6/dWN6O0XlFug8PgvVsjwASTYAEk8gNSvMm1aVj5pnxgNifJI6NoGEBhcS0AW9HK2XBXnWjS1fMpgKyp5k1vb1N9dHX5LpPzTfiVZFD7p1MUlFA+EARmNoADcIaR6Lm24WcHDwUwr3uaM3eTYREQqEREAREQGK5kt8ni32E6uX12+wspFNyLGDJBI4Fpe0gggjDwOq4bL2eYGNiYR1TQQBYk8TqTzKkUUXFgoraGy+uwiQghj2yNyIs5t7aHPU5KVRA1cxerl9dvsLEZsxwldMHDrXNDXGxzA0yvbl5KVRTcWIDb+7jKxjWVNnta7G3VtnWIvcHkSodvRpRg3DMxmPTf/mV3RTmYcUyDg2EWEESuyIIBJIyN81F7U3CpqiZ88zQZX4S4gubchoaMgeTQrgiZ5dSMq2KTF0b0jcWEFuJpY60j82nUarqb0YUY0Dv1j/xV7RUnFT+ZXLxbjsyj/wDtpScnfrH/AIr63o2pBwP6x/4q7oqfo0/4r6It+pPq/qQ+yNj/AEaIQwODYwXEA3cbuJJzJ5lZ3Vy+u32FlIsi0VkUepi9XL67fYTq5fXb7CykU3IsYvVy+u32FAbZ3NiqpetnJL8IbcOc0WF7CwPaVaUVZRUlZosm1syiu6MaMm9nfrH/AIrM2PuLBTStmhuJGhwBL3OHpAg5E20JVuRVVOCd0kS5yfNkfU0j5GOjc8YXNc11m2NnCxsRpkVWD0a0nI/rH/iruimUIy+ZJ+RCk47Mhti7G+iwiCB1oml5AN3EFzi52ZPNxKz+rl9dvsLKRWWhD1OmBrxfG4HlZtl3IiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiA//Z"
                    alt=""
                    aria-hidden="true"
                  />
                </button>
                <template x-if="isProfileMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          ></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          ></path>
                          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <span>Log out</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>