        <main>
            <!-- conteúdo específico -->
            <h2>Faça seu pedido</h2>
            <hr>
            <form id="form_pedido">
                <label for="tamanho">Selecione o tamanho da pizza:</label>
                <select name="tamanho" id="tamanho">
                    <option value="">---- Selecione ----</option>
                    <option value="b">Broto</option>
                    <option value="p">Pequena</option>
                    <option value="m">Média</option>
                    <option value="g">Grande</option>
                    <option value="gg">Gigante</option>
                </select>
                <br>
                <br>
                <div id="opcoes_pedido">
                    <p>Você selecionou <strong id="numSabores">0</strong> de <strong id="limiteSabores">0</strong>
                        sabores</p>
                    <div id="cardapio">
                        <!-- container -->
                        <div class="sabor" id="flavor1">
                            <label>
                                <input type="checkbox" name="sabores[]" value="1">
                                <div class="sabor_img">
                                    <img src="assets/images/calabresa.jpg" alt="calabresa">
                                </div>
                                <div class="sabor_descricao">
                                    <strong>Calabresa</strong>
                                    Molho, calabresa e mussarela
                                </div>
                            </label>
                        </div>

                        <div class="sabor" id="flavor2">
                            <label>
                                <input type="checkbox" name="sabores[]" value="2">
                                <div class="sabor_img">
                                    <img src="assets/images/alho.jpg" alt="alho e óleo">
                                </div>
                                <div class="sabor_descricao">
                                    <strong>Alho e Óleo</strong>
                                    Molho, alho, óleo e mussarela
                                </div>
                            </label>
                        </div>

                        <div class="sabor" id="flavor3">
                            <label>
                                <input type="checkbox" name="sabores[]" value="3">
                                <div class="sabor_img">
                                    <img src="assets/images/atum.jpg" alt="atum">
                                </div>
                                <div class="sabor_descricao">
                                    <strong>Atum</strong>
                                    Molho, Atum, cebola e mussarela
                                </div>
                            </label>
                        </div>

                        <div class="sabor" id="flavor4">
                            <label>
                                <input type="checkbox" name="sabores[]" value="4">
                                <div class="sabor_img">
                                    <img src="assets/images/marguerita.jpg" alt="marguerita">
                                </div>
                                <div class="sabor_descricao">
                                    <strong>Marguerita</strong>
                                    Molho, mussarela, manjericão, tomate
                                </div>
                            </label>
                        </div>

                        <div class="sabor" id="flavor5">
                            <label>
                                <input type="checkbox" name="sabores[]" value="5">
                                <div class="sabor_img">
                                    <img src="assets/images/milho.jpg" alt="milho">
                                </div>
                                <div class="sabor_descricao">
                                    <strong>Milho</strong>
                                    Molho, milho e mussarela
                                </div>
                            </label>
                        </div>

                        <div class="sabor" id="flavor6">
                            <label>
                                <input type="checkbox" name="sabores[]" value="6">
                                <div class="sabor_img">
                                    <img src="assets/images/vegetariana.jpg" alt="vegetariana">
                                </div>
                                <div class="sabor_descricao">
                                    <strong>Vegetariana</strong>
                                    Molho, rúcula, tomate seco e mussarela
                                </div>
                            </label>
                        </div>

                        <div class="sabor" id="flavor7">
                            <label>
                                <input type="checkbox" name="sabores[]" value="7">
                                <div class="sabor_img">
                                    <img src="assets/images/mussarela.jpg" alt="mussarela">
                                </div>
                                <div class="sabor_descricao">
                                    <strong>Mussarela</strong>
                                    Molho, mussarela e orégano
                                </div>
                            </label>
                        </div>

                        <div class="sabor" id="flavor8">
                            <label>
                                <input type="checkbox" name="sabores[]" value="8">
                                <div class="sabor_img">
                                    <img src="assets/images/strogonoff.jpg" alt="strogonoff">
                                </div>
                                <div class="sabor_descricao">
                                    <strong>Strogonoff</strong>
                                    Molho, strogonoff e batata palha
                                </div>
                            </label>
                        </div>

                        <div class="sabor" id="flavor9">
                            <label>
                                <input type="checkbox" name="sabores[]" value="9">
                                <div class="sabor_img">
                                    <img src="assets/images/frango.jpg" alt="frango">
                                </div>
                                <div class="sabor_descricao">
                                    <strong>Frango</strong>
                                    Molho, frango, catupiry e mussarela
                                </div>
                            </label>
                        </div>

                    </div> <!-- fim container -->
                    <br><br>
                    <fieldset>
                        <legend>Selecione a opção de borda:</legend>
                        <label><input type="radio" name="borda" value="Sem borda" checked>Sem borda</label><br>
                        <label><input type="radio" name="borda" value="Catupiry">Catupiry</label><br>
                        <label><input type="radio" name="borda" value="Cheddar">Cheddar</label><br>
                        <label><input type="radio" name="borda" value="Chocolate">Chocolate</label><br>
                    </fieldset>
                    <br><br>
                    <input type="submit" value="Adicionar ao carrinho" name="adicionar">
                </div>



            </form>
        </main>

        <div id="duvidas">
            <div id="texto">Dúvidas? Fale com nossos atendentes</div>
            <div id="botoes">
                <span id="minHelp" class="btHelp" onclick="minHelp()">&or;</span>
                <span id="maxHelp" class="btHelp" onclick="maxHelp()">&and;</span>
                <span id="closeHelp" class="btHelp" onclick="closeHelp()">x</span>
            </div>            
        </div>
        <script src="assets/js/pedido.js"></script>
       