@foreach($market_settings as $ms)<tr>
                              <td class="text-center">1</td>
                              <td class="text-center">{{$ms->}}</td>
                              <td class="text-center">Race 20-20</td>
                              <td class="text-center">2023-07-01 11:17:01</td>
                              <td class="text-center">Match Odds</td>
                              <td class="text-center">46.232909212801</td>
                              <td class="align-C">
                                <div class="match_locks">
                                  <input id="inpLock" type="checkbox">
                                  <label class="btn-lock" for="inpLock">
                                    <svg width="36" height="40" viewBox="0 0 36 40">
                                      <path class="lockb" d="M27 27C27 34.1797 21.1797 40 14 40C6.8203 40 1 34.1797 1 27C1 19.8203 6.8203 14 14 14C21.1797 14 27 19.8203 27 27ZM15.6298 26.5191C16.4544 25.9845 17 25.056 17 24C17 22.3431 15.6569 21 14 21C12.3431 21 11 22.3431 11 24C11 25.056 11.5456 25.9845 12.3702 26.5191L11 32H17L15.6298 26.5191Z"></path>
                                      <path class="lock" d="M6 21V10C6 5.58172 9.58172 2 14 2V2C18.4183 2 22 5.58172 22 10V21"></path>
                                      <path class="bling" d="M29 20L31 22"></path>
                                      <path class="bling" d="M31.5 15H34.5"></path>
                                      <path class="bling" d="M29 10L31 8"></path>
                                    </svg>
                                  </label>
                                </div>
                              </td>
                            </tr>

                            @endforeach
                           